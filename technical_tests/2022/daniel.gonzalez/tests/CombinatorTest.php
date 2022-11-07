<?php


namespace Tests;

use Combinator;

class CombinatorTest extends AbstractTestCase
{
    private readonly Combinator $combinator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->combinator = new Combinator();
    }

    public function dataProvider(): array
    {
        return [
            'case 1' => [[$this->molina()], ['MOLINA'],],
            'case 2' => [[$this->molina(), $this->arturo()], ['ARTURO', 'MOLINA',],],
            'case 3' => [[$this->molina(), $this->arturo(), $this->tenerife()], ['ARTURO', 'MOLINA', 'TENERIFE-ARTURO'],],
            'case 4' => [
                [$this->molina(), $this->arturo(), $this->tenerife(), $this->mijas()],
                ['ARTURO', 'MIJAS', 'MOLINA-MIJAS', 'TENERIFE-ARTURO',],
            ],
            'case 4 with different order' => [
                [$this->arturo(), $this->mijas(), $this->molina(), $this->tenerife(),],
                ['ARTURO', 'MIJAS', 'MOLINA-MIJAS', 'TENERIFE-ARTURO',],
            ],
            'case 5' => [[$this->tenerife(), $this->arturo(), $this->mijas()], ['ARTURO', 'MIJAS', 'TENERIFE-ARTURO']],
            'case 6' => [[$this->arturo(), $this->mijas()], ['ARTURO', 'MIJAS',]],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCombinator(array $projects, array $expected): void
    {
        $combinations = $this->combinator->calculate($projects);
        $names = [];
        /** @var \Combination $combination */
        foreach ($combinations as $combination) {
            $names[] = $combination->getName();
        }
        sort($names);
        $this->assertEquals($expected, $names);
    }
}
