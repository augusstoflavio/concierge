<?php
namespace App\Http\Controllers;

use App\Http\Requests\GetLogRequest;
use App\Http\Requests\StoreLogRequest;
use App\Http\Resources\LogResource;
use App\Repositories\LogRepository;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LogController extends Controller
{
    const LIMIT_PER_PAGE = 10;

    private LogRepository $logRepository;

    public function __construct(LogRepository $logRepository)
    {
        $this->logRepository = $logRepository;
    }

    public function index(GetLogRequest $getLogRequest): AnonymousResourceCollection
    {
        return LogResource::collection(
            $this->logRepository->search($getLogRequest->toDto())->paginate(self::LIMIT_PER_PAGE)
        );
    }

    public function store(StoreLogRequest $request): void
    {
        $this->logRepository->saveAsync(
            $request->toDto()
        );
    }
}
