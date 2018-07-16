<?php
//厳密モード：ファイル単位で宣言する必要あり
declare(strict_types=1);

namespace App\NewFeature;

class ScalarTypeSample
{
    //引数と戻り値の型を指定
    public function someMethod(int $number): int
    {
        return $number * 10;
    }
}
