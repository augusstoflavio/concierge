<?php

namespace App\Http\Requests;

use App\Repositories\Dtos\SaveLogDto;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLogRequest extends FormRequest
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
            "email" => ["required", "string", "email"],
            "url" => ["required", "string"],
            "method" => ["required", "string"],
            "data" => ["string", "string"],
        ];
    }

    public function toDto(): SaveLogDto {
        $saveLogDto = new SaveLogDto(
            $this->get("email"),
            $this->get("url"),
            $this->get("method"),
            $this->user()->id,
            Carbon::now()
        );
        $saveLogDto->setData($this->get("data"));

        return $saveLogDto;
    }
}
