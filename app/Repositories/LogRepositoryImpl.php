<?php

namespace App\Repositories;

use App\Jobs\ProcessLog;
use App\Models\Log;
use App\Repositories\Dtos\GetLogDto;
use App\Repositories\Dtos\SaveLogDto;
use Illuminate\Database\Eloquent\Builder;

class LogRepositoryImpl implements LogRepository
{

    function save(SaveLogDto $saveLogDto): void
    {
        $log = new Log();
        $log->email = $saveLogDto->getEmail();
        $log->url = $saveLogDto->getUrl();
        $log->method = $saveLogDto->getMethod();
        $log->data = $saveLogDto->getData();
        $log->date = $saveLogDto->getDate();
        $log->system_id = $saveLogDto->getSystemId();
        $log->save();
    }

    function saveAsync(SaveLogDto $saveLogDto): void
    {
        ProcessLog::dispatch($saveLogDto);
    }

    function search(GetLogDto $getLogDto): Builder
    {
        $builder = Log::whereSystemId($getLogDto->getSystemId());

        if (!empty($getLogDto->getMethod())) {
            $builder->whereMethod($getLogDto->getMethod());
        }

        if (!empty($getLogDto->getEmail())) {
            $builder->whereEmail($getLogDto->getEmail());
        }

        if (!empty($getLogDto->getUrl())) {
            $builder->whereUrl($getLogDto->getUrl());
        }

        if (!empty($getLogDto->getFrom())) {
            $from = $getLogDto->getFrom();
            $builder->where("date", ">=", $from);
        }

        if (!empty($getLogDto->getTo())) {
            $to = $getLogDto->getTo();
            if ($to->format('H:i:s') === '00:00:00') {
                $builder->whereDate("date", "<=", $to->format("Y-m-d"));
            } else {
                $builder->where("date", "<=", $to);
            }
        }

        return $builder;
    }
}
