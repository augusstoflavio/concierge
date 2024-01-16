<?php

namespace App\Jobs;

use App\Repositories\Dtos\SaveLogDto;
use App\Repositories\LogRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessLog implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private SaveLogDto $saveLogDto;

    /**
     * Create a new job instance.
     */
    public function __construct(SaveLogDto $saveLogDto)
    {
        $this->saveLogDto = $saveLogDto;
    }

    /**
     * Execute the job.
     */
    public function handle(LogRepository $logRepository): void
    {
        $logRepository->save($this->saveLogDto);
    }
}
