<?php


namespace Tests;

use Combination;
use Validator;

class ValidatorTest extends AbstractTestCase
{
    private readonly Validator $validator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new Validator();
    }

    public function dataProvider(): array
    {
        return [
            'case 1' => [new Combination([$this->molina()]), 'MOLINA',],
            'case 2' => [new Combination([$this->molina(), $this->tenerife()]), 'MOLINA',],
            'case 3' => [new Combination([$this->tenerife(), $this->molina()]), 'TENERIFE',],
            'case 4' => [new Combination([$this->molina(), $this->tenerife(), $this->mijas()]), 'MOLINA-MIJAS',],
            'case 5' => [new Combination([$this->tenerife(), $this->arturo(), $this->mijas()]), 'TENERIFE-ARTURO',],
            'case 6' => [new Combination([$this->molina(), $this->tenerife(), $this->arturo(), $this->mijas()]), 'MOLINA-MIJAS',],
            'case 7' => [new Combination([$this->tenerife(), $this->arturo(), $this->molina(),]), 'TENERIFE-ARTURO',],
            'case 8' => [new Combination([$this->molina(), $this->tenerife(), $this->arturo(), $this->mijas()]), 'MOLINA-MIJAS',],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCombinator(Combination $combination, string $expected): void
    {
        $combination = $this->validator->validate($combination);
        $this->assertEquals($expected, $combination->getName());
    }
}
