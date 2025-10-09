<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidFileName implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Get the original file name without the extension
        $filename = pathinfo($value->getClientOriginalName(), PATHINFO_FILENAME);

        // Check if the filename contains any special characters
        if (!preg_match('/^[A-Za-z0-9_-]+$/', $filename)) {
            $fail('The file name contains special characters. Only alphanumeric characters, dashes, and underscores are allowed.');
        }
    }
}
