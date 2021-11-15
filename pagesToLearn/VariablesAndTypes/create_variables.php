<?php
/*
 * создаются переменные через знак $
 * знак \n в браузере игнорируется, но в консоли работает
 * */
$a = 10;
$b = 11;
$c = $a + $b;
echo "a = $a, b = $b";
echo "\n<br>";
echo "a + b = $c";

echo "\n<br><hr>";
echo "variables type<br>";

$a = 1;
$b = 1.3;
$c = "text";
$d = true;
$e = [];
echo "a = $a -> ".gettype($a)."<br>";
echo "b = $b -> ".gettype($b)."<br>";
echo "c = $c -> ".gettype($c)."<br>";
echo "d = true -> ".gettype($d)."<br>";
echo "e = [] -> ".gettype($e)."<br>";