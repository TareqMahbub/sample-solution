<?php

namespace Tests\Unit;

use App\CaseAlternator;
use PHPUnit\Framework\TestCase;

class CaseAlternatorTest extends TestCase
{
    /**
     * Tests with Empty String
     *
     * @return void
     */
    public function test_succeeds_with_empty_string()
    {
        $actual = CaseAlternator::alternate("");
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
        $actual = CaseAlternator::alternate("hello world");
        $expected = "hElLo wOrLd";

        $this->assertEquals($expected, $actual);
    }


    /**
     * Tests with all upper input
     *
     * @return void
     */
    public function test_succeeds_with_all_upper_input()
    {
        $actual = CaseAlternator::alternate("HELLO WORLD");
        $expected = "HeLlO WoRlD";

        $this->assertEquals($expected, $actual);
    }
}
