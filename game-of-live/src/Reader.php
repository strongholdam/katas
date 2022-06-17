<?php

namespace App;

class Reader
{
    public function read(): Crop
    {
        return new Crop([
            [new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false)],
            [new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(true), new Cell(false), new Cell(false)],
            [new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(true), new Cell(true), new Cell(false), new Cell(false)],
            [new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false), new Cell(false)],
        ]);
    }
}
