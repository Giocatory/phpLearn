<?php
include_once 'Point.php';
# :: - оператор разрешения видимости

$first_dot = new Point(5, 3.3);
echo $first_dot->getX() . "\n";  // 5
echo $first_dot->getY() . "\n";  // 3
echo $first_dot; // call function __toString
echo "\n";
echo Point::HowObjectsCreated();  // 1

echo "\n\n";

$second_dot = new Point(22.123);
echo $second_dot->getX() . "\n";  // 22
echo $second_dot->getY() . "\n";  // 0
echo $second_dot; // call function __toString
echo "\n";
echo Point::HowObjectsCreated();  // 2

echo "\n\n";

$third_dot = new Point();
$third_dot->setCords(12, 3);
echo $third_dot->getX() . "\n";  // 12
echo $third_dot->getY() . "\n";  // 3
echo $third_dot; // call function __toString
echo "\n";
echo Point::HowObjectsCreated();  // 3

echo "\n\n";

echo "class Point have methods\n";
foreach (get_class_methods('Point') as $key => $value){echo "$key - $value \n";}; echo "\n";
//class Point have methods
//0 - __construct
//1 - setCords
//2 - __toString
//3 - HowObjectsCreated
//4 - getX
//5 - getY


//echo "class Point have vars\n";
//echo get_class_vars('Point') . "\n";   // Если все поля с модификатором private, то этот массив будет пустой
// echo get_parent_class('Point') . "\n";  // BOOL, есть ли родительский класс