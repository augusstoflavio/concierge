<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class DateFormatRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (
            \DateTime::createFromFormat('Y-m-d H:i:s', $value) === false &&
            \DateTime::createFromFormat('Y-m-d', $value) === false
        ) {
            $fail('The :attribute must be in the format Y-m-d or Y-m-d H:i:s.');
        }
    }
}
