<?php
declare(strict_types=1);

namespace Test\Phpunit;

use App\Phpunit\Calculation;
use PHPUnit\Framework\TestCase;

class CalculationTest extends TestCase
{
    /**
     * @test
     */
    public function sum()
    {
        $calculation = new Calculation();
        $result = $calculation->sum(10, 20);

        $this->assertEquals(30, $result);
    }
}
