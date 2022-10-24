<?php

class Combination
{
    private array $items = [];

    public function __construct(array $items = [])
    {
        foreach ($items as $item) {
            $this->add($item);
        }
    }

    public function add(Project $project): void
    {
        if (!in_array($project, $this->items)) {
            $this->items[] = $project;
        }
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function getName(): string
    {
        $this->sort();
        $names = array_map(function (Project $project) {
            return $project->getName();
        }, $this->items);

        return implode('-', $names);
    }

    public function getProfit(): float
    {
        return array_reduce($this->items, function (float $carry, Project $project): float {
            return $carry + $project->getProfit();
        }, 0.0);
    }

    public function sort(): void
    {
        usort($this->items, function (Project $project1, Project $project2) {
            if ($project1->getFrom() == $project2->getFrom()) {
                return 0;
            }

            return $project1->getFrom() < $project2->getFrom() ? -1 : 1;
        });
    }
}
