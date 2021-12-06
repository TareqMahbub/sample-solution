<?php

namespace App;

class UppercaseMaker
{
    /**
     * @param string $text
     * @return string
     */
    public static function make(string $text): string{
        return strtoupper($text);
    }
}
