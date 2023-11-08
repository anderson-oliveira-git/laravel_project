<?php

namespace App\Helpers;

trait SanitizerFields
{
    const INPUT_TEXT_REGEX = '/^[a-zA-Z\s]*$/';

    public function removeEspecialCharacters(string $inputText): string
    {
        return preg_replace(self::INPUT_TEXT_REGEX, '', $inputText);
    }
}
