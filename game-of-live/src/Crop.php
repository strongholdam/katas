<?php

namespace App;

class Crop
{
    public function __construct(private array $cells)
    {
    }

    public function countAliveNeighbours($a, $b): void
    {
        $heigh = count($this->cells);
        $widgth = count($this->cells[0]);
        
        for ($i = $a - 1; $i < $a + 1; $i++) {
            if ($i <= 0 || $widgth <= $i) {
                continue;
            }
        }
    }

    public function setAlive($a, $b): void
    {
    }
}
