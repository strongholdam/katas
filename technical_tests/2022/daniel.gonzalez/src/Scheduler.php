<?php

class Scheduler
{

    public function __construct(private readonly Combinator $combinator)
    {
    }

    public function calculate(array $projects): Combination
    {
        $combinations = $this->combinator->calculate($projects);

        $validCombinations = $this->sortByProfit($combinations);

        return reset($validCombinations);
    }

    private function sortByProfit(array $combinations): array
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
