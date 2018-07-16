<?php
declare(strict_types=1);

namespace App\Phpunit\Mock;

class LeapYear
{
    /**
     * うるう年かどうかを判断する
     *
     * @param  int  $year 西暦
     * @return bool
     */
    public function isLeapYear(int $year): bool
    {
        if (($year % 4 === 0 && $year % 100 !== 0) || $year % 400 === 0) {
            return true;
        } else {
            return false;
        }
    }
}
