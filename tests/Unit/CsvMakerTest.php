<?php

namespace Tests\Unit;

use App\CsvMaker;
use Exception;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class CsvMakerTest extends TestCase
{
    /**
     * Tests with Empty String
     *
     * @return void
     */
    public function test_exception_happens_with_empty_string()
    {
        $this->expectException(Exception::class);
        CsvMaker::make("");
    }

    /**
     * Tests with all lower input
     *
     * @return void
     * @throws Exception
     */
    public function test_succeeds_with_all_lower_input()
    {
        $filepath = 'test_output.csv';
        CsvMaker::make("hello world", $filepath);
        $expected = "h,e,l,l,o, ,w,o,r,l,d";
        $actual = File::get($filepath);

        File::delete($filepath);

        $this->assertEquals($expected, $actual);
    }


    /**
     * Tests with all upper input
     *
     * @return void
     * @throws Exception
     */
    public function test_succeeds_with_all_upper_input()
    {
        $filepath = 'test_output.csv';
        CsvMaker::make("HELLO WORLD", $filepath);
        $expected = "H,E,L,L,O, ,W,O,R,L,D";
        $actual = File::get($filepath);

        File::delete($filepath);

        $this->assertEquals($expected, $actual);
    }
}
