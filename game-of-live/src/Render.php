<?php

namespace App;

class Render
{
    public static function render(Crop $crop)
    {
        $cells = $crop->getCells();
        $width = count($cells);
        $height = count($cells[0]);

        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                $cell = $cells[$x][$y];
                echo $cell->isAlive() ? '*' : '.';
            }
            echo "\n";
        }
    }
}
