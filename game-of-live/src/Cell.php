<?php

namespace App;

class Cell
{
    public function __construct(private bool $isAlive)
    {
    }

    public function isAlive(): bool
    {
        return $this->isAlive;
    }

    public function setIsAlive(bool $alive): void
    {
        $this->isAlive = $alive;
    }
}
