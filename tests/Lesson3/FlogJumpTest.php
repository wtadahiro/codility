<?php

use Wtadahiro\Codility\Lesson3\FlogJump;

class FlogJumpTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     */
    function testVal()
    {
        $target = new FlogJump();
        $this->assertEquals(3, $target->solution(10, 85, 30));
        $this->assertEquals(0, $target->solution(1, 1, 1));
    }

    /**
     *
     */
    function testType()
    {
        $target = new FlogJump();
        $this->assertInternalType('int', $target->solution(10, 85, 30));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    function test0Distance()
    {
        $target = new FlogJump();
        $target->solution(1, 1, 0);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    function testXisGreaterThanY()
    {
        $target = new FlogJump();
        $target->solution(100, 10, 1);
    }
}
