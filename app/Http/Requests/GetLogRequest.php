<?php

namespace App\Http\Requests;

use App\Repositories\Dtos\GetLogDto;
use App\Rules\DateFormatRule;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class GetLogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "email" => ["string"],
            "url" => ["string"],
            "method" => ["string"],
            "data" => ["string"],
            "from" => [new DateFormatRule()],
            "to" => [new DateFormatRule()],
        ];
    }

    public function toDto(): GetLogDto {
        $getLogDto = new GetLogDto(
            $this->user()->id
        );
        $getLogDto->setEmail($this->get("email"));
        $getLogDto->setUrl($this->get("url"));
        $getLogDto->setMethod($this->get("method"));
        $getLogDto->setData($this->get("data"));

        if (!empty($this->get("from"))) {
            $getLogDto->setFrom(Carbon::create($this->get("from")));
        }

        if (!empty($this->get("to"))) {
            $getLogDto->setTo(Carbon::create($this->get("to")));
        }

        return $getLogDto;
    }
}
