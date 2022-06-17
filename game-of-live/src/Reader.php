<?php

namespace App;

class Reader
{
    public function read(): Crop
    {
        $crop = new Crop(4, 8);

        $crop->setAlive(2, 5);
        $crop->setAlive(3, 4);
        $crop->setAlive(3, 5);
    }
}
