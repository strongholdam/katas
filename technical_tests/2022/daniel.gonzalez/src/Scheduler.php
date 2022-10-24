<?php

class Scheduler
{

    public function __construct(private readonly Combinator $combinator, private readonly Validator $validator)
    {
    }

    public function calculate(array $projects): Combination
    {
        $combinations = $this->combinator->calculate($projects);
        $validCombinations = $this->calculateValidCombinations($combinations);

        $validCombinations = $this->sortValidCombinations($validCombinations);
        $selected = reset($validCombinations);

        return $selected;
    }


    private function calculateValidCombinations(array $combinations): array
    {
        $validCombinations = [];
        foreach ($combinations as $source) {
            $target = $this->validator->validate($source);
            $validCombinations[$target->getName()] = $target;
        }

        return $validCombinations;
    }

    private function sortValidCombinations(array $combinations): array
    {
        usort($combinations, function (Combination $combination1, Combination $combination2) {
            if ($combination1->getProfit() == $combination2->getProfit()) {
                return 0;
            }

            return $combination1->getProfit() < $combination2->getProfit() ? 1 : -1;
        });

        return $combinations;
    }
}
