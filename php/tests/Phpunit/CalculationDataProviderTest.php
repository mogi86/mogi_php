<?php
declare(strict_types=1);

namespace Test\Phpunit;

use App\Phpunit\Calculation;
use PHPUnit\Framework\TestCase;

class CalculationDataProviderTest extends TestCase
{
    /**
     * @dataProvider sumDataProvider
     * @test
     */
    public function sum(int $expr1, int $expr2, int $expected)
    {
        $calculation = new Calculation();
        $result = $calculation->sum($expr1, $expr2);

        $this->assertEquals($expected, $result);
    }

    public function sumDataProvider()
    {
        return [
            [10, 20, 30],    //1パターン目
            [20, 30, 50],    //2パターン目
            [100, 100, 200], //3パターン目
        ];
    }
}
