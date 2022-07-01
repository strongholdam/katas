<?php

namespace App;

class Crop
{
    private $cells = [];

    public function __construct(private int $width, private int $height)
    {
        for ($y = 0; $y < $height; $y++) {
            $this->cells[] = [];

            for ($x = 0; $x < $width; $x++) {
                $this->cells[$y][] = new Cell(false);
            }
        }
    }

    public function countAliveNeighbours($x, $y): void
    {
        for ($i = $x - 1; $i < $x + 1; $i++) {
            if ($i <= 0 || $this->getWidth() <= $i) {
                continue;
            }

            for ($yy = $y -1; $yy < $y +1; $yy++) {
                if ($yy <= 0 || $this->height <= $yy) {
                    continue;
                }



            }

        }
    }

    private function isAlive($x, $y)
    {
        $cell = $this->cells[$x][$y];

        if ($cell->isAlive()) {

        }
    }





    public function getCells(): array
    {
        return $this->cells;
    }

    public function setAlive(int $x, int $y): void
    {
        $this->cells[$y - 1][$x - 1]->setIsAlive(true);
    }

    private function getWidth(): mixed
    {
        return $this->width;
    }
}
