<?php

namespace App;

class Crop
{
    private $cells = [];

    public function __construct(private int $height, private int $width)
    {
        for ($y = 0; $y < $height; $y++) {
            $this->cells[] = [];

            for ($x = 0; $x < $width; $x++) {
                $this->cells[$y][] = new Cell(false);
            }
        }
    }

    public function countAliveNeighbours(int $y, int $x): int
    {
        $aliveNeighbours = 0;

        for ($j = $y -1; $j <= $y +1; $j++) {
            if ($j <= 0 || $this->height <= $j) {
                continue;
            }

            for ($i = $x - 1; $i <= $x + 1; $i++) {
                if ($i <= 0 || $this->width <= $i) {
                    continue;
                }

                if ($y == $j && $x == $i) {
                    continue;
                }

                if ($this->cells[$j -1][$i -1]->isAlive()) {
                    $aliveNeighbours++;
                }
            }
        }

        return $aliveNeighbours;
    }

    public function getCells(): array
    {
        return $this->cells;
    }

    public function setAlive(int $y, int $x): void
    {
        $this->cells[$y - 1][$x - 1]->setIsAlive(true);
    }
}
