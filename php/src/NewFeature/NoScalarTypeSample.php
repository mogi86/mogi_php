<?php
//厳密モードの宣言なし

namespace App\NewFeature;

class NoScalarTypeSample
{
    //引数と戻り値の型を指定
    public function someMethod($number)
    {
        return $number * 10;
    }
}
