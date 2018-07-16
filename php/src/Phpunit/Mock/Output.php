<?php
declare(strict_types=1);

namespace App\Phpunit\Mock;

class Output
{
    private $leapYear;

    public function __construct(LeapYear $leapYear)
    {
        $this->leapYear = $leapYear;
    }

    /**
     * うるう年かどうかをメッセージで返す
     *
     * @param  int    $year 西暦
     * @return string
     */
    public function outputResult(int $year): string
    {
        $result = $this->leapYear->isLeapYear($year);

        if ($result === true) {
            return 'うるう年です。';
        } else {
            return 'うるう年ではありません。';
        }
    }
}
