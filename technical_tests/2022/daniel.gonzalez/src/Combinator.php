<?php

class Combinator
{
    public function calculate(array $projects): array
    {
        $combinations = [];
        /** @var Project $project */
        foreach ($projects as $project) {
            $combination = new Combination();
            $combination->add($project);

            $this->addProjects($combination, $projects);

            $combinations[] = $combination;
        }

        return $combinations;
    }

    private function addProjects(Combination $combination, array $projects): void
    {
        /** @var Project $project */
        foreach ($projects as $project) {
            $current = $combination->getLast();
            if ($this->isSame($current, $project)) {
                continue;
            }
            if (!$this->startEqualOrAfter($current, $project)) {
                continue;
            }
            $combination->add($project);
            $this->addProjects($combination, $projects);
        }
    }

    private function isSame(Project $current, Project $project): bool
    {
        return $current === $project;
    }

    private function startEqualOrAfter(Project $current, Project $project): bool
    {
        return $current->getTo() <= $project->getFrom();
    }
}
