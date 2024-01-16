<?php
namespace App\Repositories;

use App\Repositories\Dtos\GetLogDto;
use App\Repositories\Dtos\SaveLogDto;
use Illuminate\Database\Eloquent\Builder;

interface LogRepository {

    function save(SaveLogDto $saveLogDto): void;

    function saveAsync(SaveLogDto $saveLogDto): void;

    function search(GetLogDto $getLogDto): Builder;
}
