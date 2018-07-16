<?php
declare(strict_types=1);

namespace App\Phpunit;

class Calculation
{
    /**
     * 足し算の結果を返す
     *
     * @param  int $expr1 左辺
     * @param  int $expr2 右辺
     * @return int 計算結果
     */
    public function sum(int $expr1, int $expr2): int
    {
        return $expr1 + $expr2;
    }
}
