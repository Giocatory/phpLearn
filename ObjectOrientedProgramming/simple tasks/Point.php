<?php

class Point{
    private int $x;
    private int $y;
    private static int $count = 0;

    /**
     * @return null constructor
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
        Point::$count += 1;
        return null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "x = $this->x;\ny = $this->y;";
    }

    /**
     * @return int static variable
     */
    public static function HowObjectsCreated(): int {
        return self::$count;
    }
    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }
}