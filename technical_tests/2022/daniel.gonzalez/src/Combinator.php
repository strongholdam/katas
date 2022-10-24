<?php

class Combinator
{
    public function calculate(array $items): array
    {
        $options = $this->getCombinations($items);

        return array_map(function (array $option) {
            return new Combination($option);
        }, $options);
    }

    protected function getCombinations(array $items): array
    {
        $combinations = [];
        /** @var Project $project */
        foreach ($items as $item) {
            if (count($items) <= 1) {
                return [[$item]];
            }
            $childOptions = $this->getCombinations($this->getCopyWithoutItem($items, $item));
            foreach ($childOptions as $childOption) {
                $combinations[] = array_merge([$item], $childOption);
            }
        }

        return $combinations;
    }

    private function getCopyWithoutItem(array $projects, $project): array
    {
        $copy = [];
        foreach ($projects as $currentProject) {
            if ($project == $currentProject) {
                continue;
            }
            $copy[] = $currentProject;
        }

        return $copy;
    }

}
