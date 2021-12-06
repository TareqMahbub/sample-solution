<?php

namespace Tests\Unit;

use App\UppercaseMaker;
use PHPUnit\Framework\TestCase;

class UppercaseMakerTest extends TestCase
{
    /**
     * Tests with Empty String
     *
     * @return void
     */
    public function test_succeeds_with_empty_string()
    {
        $actual = UppercaseMaker::make("");
        $expected = "";

        $this->assertEquals($expected, $actual);
    }

    /**
     * Tests with all lower input
     *
     * @return void
     */
    public function test_succeeds_with_all_lower_input()
    {
        $actual = UppercaseMaker::make("hello world");
        $expected = "HELLO WORLD";

        $this->assertEquals($expected, $actual);
    }


    /**
     * Tests with all upper input
     *
     * @return void
     */
    public function test_succeeds_with_all_upper_input()
    {
        $actual = UppercaseMaker::make("HELLO WORLD");
        $expected = "HELLO WORLD";

        $this->assertEquals($expected, $actual);
    }
}
