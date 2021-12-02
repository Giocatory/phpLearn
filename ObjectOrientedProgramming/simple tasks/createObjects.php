<?php
include_once 'Point.php';
# :: - оператор разрешения видимости

$first_dot = new Point(5, 3.3);
echo $first_dot->getX() . "\n";  // 5
echo $first_dot->getY() . "\n";  // 3
echo $first_dot; // call function __toString
echo "\n";
echo Point::HowObjectsCreated();  // 1

echo "\n";

$second_dot = new Point(22.123, 10);
echo $second_dot->getX() . "\n";  // 22
echo $second_dot->getY() . "\n";  // 10
echo $second_dot; // call function __toString
echo "\n";
echo Point::HowObjectsCreated();  // 2