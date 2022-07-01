<?php

namespace App;

class Render
{
	public static function render(Crop $crop)
	{
		$cells = $crop->getCells();

		foreach ($cells as $key => $row) {
			foreach ($row as $cell) {
				echo $cell->isAlive() ? 'O' : '.';
			}
			echo "\n";
		}
	}
}