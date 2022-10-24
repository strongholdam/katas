<?php

namespace Tests;

use Combinator;
use Scheduler;
use Validator;

class SchedulerTest extends AbstractTestCase
{
    private Scheduler $scheduler;

    public function dataProvider(): array
    {
        return [
            'case 2: molina' => [[$this->molina(), $this->tenerife()], 14000.0],
            'case 1: molina' => [[$this->molina()], 14000.0],
            'case 3: arturo' => [[$this->molina(), $this->tenerife(), $this->arturo()], 7000.0 + 19000.0],
            'case 4: tenerife + arturo' => [[$this->tenerife(), $this->arturo(), $this->mijas()], 7000.0 + 19000.0],
            'case 5: arturo' => [[$this->arturo(), $this->mijas()], 19000.0],
            'case 6: molina + mijas' => [[$this->molina(), $this->tenerife(), $this->arturo(), $this->mijas()], 14000.0 + 18000.0],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCalculate(array $projects, float $expected)
    {
        $combination = $this->scheduler->calculate($projects);

        $this->assertEquals($expected, $combination->getProfit());
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->scheduler = new Scheduler(new Combinator(), new Validator());
    }
}
