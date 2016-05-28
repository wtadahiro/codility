<?php

use Wtadahiro\Codility\Lesson1\BinaryGap;

class BinaryGapTest extends PHPUnit_Framework_TestCase
{
    function testVal()
    {
        $target = new BinaryGap();
        $solution = $target->solution(10);

        $this->assertEquals(1, $solution);
    }
}
