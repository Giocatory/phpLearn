<?php

use JetBrains\PhpStorm\Pure;

include_once 'IArea.php';

class Triangle extends Polygon implements IArea
{
    #[Pure] public function area(): float|int
    {
        return ($this->getHeight() * $this->getWidth() / 2);
    }
}