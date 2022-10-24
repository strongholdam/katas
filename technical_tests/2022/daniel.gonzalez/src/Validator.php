<?php

class Validator
{
    public function validate(Combination $source): Combination
    {
        $target = new Combination();
        /** @var Project $projectToAdd */
        foreach ($source->getItems() as $projectToAdd) {
            if (!$this->isOptionValid($target, $projectToAdd)) {
                continue;
            }
            $target->add($projectToAdd);
        }

        $target->sort();

        return $target;
    }

    protected function canBeAllocated(Project $source, Project $target): bool
    {
        if ($target->getTo() <= $source->getFrom()) {
            return true;
        }
        if ($source->getTo() <= $target->getFrom()) {
            return true;
        }

        return false;
    }

    private function isOptionValid(Combination $target, Project $projectToAdd): bool
    {
        if ($target->count() == 0) {
            return true;
        }
        /** @var Project $project */
        foreach ($target->getItems() as $project) {
            if (!$this->canBeAllocated($project, $projectToAdd)) {
                return false;
            }
        }

        return true;
    }
}
