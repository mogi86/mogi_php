<?php

namespace App\Phpcs;

class PhpcsSample
{
    public function sampleFunction($a, $b = null)
    {
        if($a === $b) {
            null;
        }
    }

    public function calc($a,$b)
    {
        return $a + $b;
    }
}
