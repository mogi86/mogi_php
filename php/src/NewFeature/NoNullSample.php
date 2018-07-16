<?php

namespace App\NewFeature;

class NoNullSample
{
    public function someMethod($hoge)
    {
        //NULLか、NULLでないかで処理が分かれる
        if (is_null($hoge)) {
            return 'NULLです。';
        } else {
            return $hoge;
        }
    }
}
