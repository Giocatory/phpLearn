<?php

class Polygon
{
    private float $width;
    private float $height;

    function __construct(float $w=4, float $h=5)
    {
        $this->height = $h;
        $this->width = $w;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }
}