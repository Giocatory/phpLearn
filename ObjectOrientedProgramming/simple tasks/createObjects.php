<?php
include_once 'Point.php';

$point = new Point(5, 3.3);
echo $point->getX() . "\n";  // 5
echo $point->getY() . "\n";  // 3
echo $point; // call function __toString
echo "\n";
echo Point::HowObjectsCreated();