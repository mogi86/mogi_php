<?php
declare(strict_types=1);

namespace Test\Phpunit\Mock;

use PHPUnit\Framework\TestCase;
use App\Phpunit\Mock\Output;
use App\Phpunit\Mock\LeapYear;

class OutputTest extends TestCase
{
    /**
     * @test
     */
    public function outputResult()
    {
        //モック化します
        $mock = $this->createMock(LeapYear::class);

        //メソッドの振る舞いを設定
        $mock->method('isLeapYear')
            ->with(2000)
            ->willReturn(true);

        $output = new Output($mock);
        $result = $output->outputResult(2000);

        $this->assertEquals('うるう年です。', $result);
    }
}
