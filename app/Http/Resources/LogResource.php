<?php

namespace App\Http\Resources;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /**
         * @var Log $this
         */
        return [
            "id" => $this->id,
            "method" => $this->method,
            "url" => $this->url,
            "date" => $this->date,
            "data" => $this->data,
            "email" => $this->email,
        ];
    }
}
