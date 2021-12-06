<?php

namespace App;

class CaseAlternator
{
    /**
     * @param string $text
     * @return string
     */
    public static function alternate(string $text): string{
        $result = '';
        if(empty($text)) return $result;

        $result = $text[0];
        $make_upper = ctype_lower($text[0]);
        for($i = 1; strlen($text) > $i; $i++){
            $result .= $make_upper ? strtoupper($text[$i]) : strtolower($text[$i]);
            $make_upper = !$make_upper;
        }

        return $result;
    }
}
