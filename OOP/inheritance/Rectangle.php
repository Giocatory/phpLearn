<?php

use JetBrains\PhpStorm\Pure;

include_once 'IArea.php';

class Rectangle extends Polygon implements IArea
{
    #[Pure] public function area(): float|int
    {
        return ($this->getWidth() * $this->getHeight());
    }
}