<?php

namespace App;

class Crop
{
    private $cells = [];

    public function __construct(private int $heigh, private int $width)
    {
        for ($y = 0; $y < $width ; $y++) {
            $this->cells[] = [];

            for ($x = 0; $x < $heigh; $x++) {
                $this->cells[$y][] = new Cell(false);
            }
        }
    }

    public function setAlive(int $x, $int $y): void
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


}
