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
            'case 1' => [[$this->molina()], 1,],
            'case 2' => [[$this->molina(), $this->arturo()], 2,],
            'case 3' => [[$this->molina(), $this->arturo(), $this->tenerife()], 6,],
            'case 4' => [[$this->molina(), $this->arturo(), $this->tenerife(), $this->mijas()], 24,],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCombinator(array $projects, int $expected): void
    {
        $combinations = $this->combinator->calculate($projects);
        $this->assertCount($expected, $combinations);
    }
}
