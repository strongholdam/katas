<?php

class Cultivo
{


	public function __construct(private array $cells, private array $cellsAnalizadas = [])
	{

	}

    public function getCells(): array
    {
        return $this->cells;
    }

    public function setCells(array $cells): void
    {
        $this->cells = $cells;
    }


}