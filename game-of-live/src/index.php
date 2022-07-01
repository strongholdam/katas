<?php

require __DIR__.'/../vendor/autoload.php';

use App\Live;
use App\Reader;
use App\Render;


$crop = Reader::read();
$newCrop = Live::execute($crop);
Render::render($newCrop);

