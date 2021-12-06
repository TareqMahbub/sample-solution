<?php

namespace App;

use Exception;
use Illuminate\Support\Facades\File;

class CsvMaker
{
    /**
     * @param string $text
     * @param string $filepath
     * @return void
     *
     * @throws Exception
     */
    public static function make(string $text, string $filepath = 'output.csv'): void{
        if(empty($text)) throw new Exception("Input mandatory. No file created!");

        File::put($filepath, implode(",", str_split($text)));
    }
}
