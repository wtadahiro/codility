<?php
namespace Wtadahiro\Codility\Lesson3;

class FlogJump
{
    public function solution($x, $y, $d)
    {
        $this->validate($x, $y, $d);
        return (int)ceil(($y-$x)/$d);
    }

    private function validate($x, $y, $d)
    {
        if($d <= 0) {
            throw new \InvalidArgumentException('Distance must be more than 0.');
        }

        if($x > $y) {
            throw new \InvalidArgumentException('$y must be greater than $x.');
        }
    }
}
