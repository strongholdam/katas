<?php

namespace App;

class Live
{
    public static function execute(Crop $crop): Crop
    {
        var_dump($crop->countAliveNeighbours(1, 1));

        return $crop;
    }

    private function cellIsAlive($x, $y)
    {

    }

    private function cellIsNotAlive($x, $y)
    {

    }
}
