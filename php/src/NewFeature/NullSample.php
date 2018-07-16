<?php

namespace App\NewFeature;

class NullSample
{
    public function someMethod($hoge)
    {
        return $hoge ?? 'NULLです。';
    }
}
