<?php
include_once 'Polygon.php';
include_once 'Rectangle.php';
include_once 'Triangle.php';
include_once 'IArea.php';

$rectangle = new Rectangle(10, 5);
$triangle = new Triangle(15);

echo $rectangle->area();  // 50
echo "\n";
echo $triangle->area();  // 37.5
