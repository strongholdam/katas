<?php

namespace App;

class Crop
{
    private $cells = [];

    public function __construct(private int $width, private int $height)
    {
        for ($y = 0; $y < $height ; $y++) {
            $this->cells[] = [];

            for ($x = 0; $x < $width; $x++) {
                $this->cells[$y][] = new Cell(false);
            }
        }
    }

    public function setAlive(int $x, int $y): void
    {
        $this->cells[$y - 1][$x - 1]->isAlive(true);
    }

    public function countAliveNeighbours($a, $b): void
    {
        for ($i = $a - 1; $i < $a + 1; $i++) {
            if ($i <= 0 || $widgth <= $i) {
                continue;
            }
        }
    }

    public function getCells(): array
    {
        return $this->cells;
    }
}
