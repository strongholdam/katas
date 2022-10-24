<?php

namespace Tests;


use Combination;

class CombinationTest extends AbstractTestCase
{
    public function dataProvider(): array
    {
        return [
            'case 1' => [new  Combination([$this->molina()]), ['profit' => 14000.0, 'name' => 'MOLINA'],],
            'case 2' => [new  Combination([$this->molina(), $this->tenerife()]), ['profit' => 14000.0 + 7000.0, 'name' => 'MOLINA-TENERIFE'],],
            'case 3' => [new  Combination([$this->molina(), $this->tenerife(), $this->arturo()]), ['profit' => 14000.0 + 7000.0 + 19000.0, 'name' => 'MOLINA-TENERIFE-ARTURO'],],
            'case 4' => [new  Combination([$this->tenerife(), $this->arturo(), $this->molina()]), ['profit' => 14000.0 + 7000.0 + 19000.0, 'name' => 'MOLINA-TENERIFE-ARTURO'],],
            'case 5l' => [new  Combination([$this->molina(), $this->molina()]), ['profit' => 14000.0, 'name' => 'MOLINA'],],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testName(Combination $combination, array $expected): void
    {
        $this->assertEquals($expected['name'], $combination->getName());
    }

    /**
     * @dataProvider dataProvider
     */
    public function testProfit(Combination $combination, array $expected): void
    {
        $this->assertEquals($expected['profit'], $combination->getProfit());
    }
}
