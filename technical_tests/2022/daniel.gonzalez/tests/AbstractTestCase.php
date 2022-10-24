<?php

namespace Tests;

use DateTimeInterface;
use PHPUnit\Framework\TestCase;
use Project;

abstract class AbstractTestCase extends TestCase
{
    protected function arturo(): Project
    {
        return new Project('ARTURO', $this->date('07/01/2022'), $this->date('24/01/2022'), 19000.0);
    }

    protected function date($str): DateTimeInterface
    {
        return \DateTime::createFromFormat('d/m/Y', $str);
    }

    protected function mijas(): Project
    {
        return new Project('MIJAS', $this->date('15/01/2022'), $this->date('31/01/2022'), 18000.0);
    }

    protected function molina(): Project
    {
        return new Project('MOLINA', $this->date('01/01/2022'), $this->date('15/01/2022'), 14000.0);
    }

    protected function tenerife(): Project
    {
        return new Project('TENERIFE', $this->date('04/01/2022'), $this->date('07/01/2022'), 7000.0);
    }
}
