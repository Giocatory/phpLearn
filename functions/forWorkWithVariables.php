<?php
$a = 5;
$b = ' ';
$c = '';
$d = null;
$e = array();

# isset()
// была ли переменная инициализирована отлично от null
echo '$a -> ' . isset($a) . "\n"; // True or 1
echo '$b -> ' . isset($b) . "\n"; // True or 1
echo '$c -> ' . isset($c) . "\n"; // True or 1
echo '$d -> ' . isset($d) . (isset($d)?'1':'0'). "\n"; // False or 0
echo '$e -> ' . isset($e) . "\n"; // True or 1

# unset()
// удаляет переменную
unset($e);
echo 'Вызвать $e не получится, ее не существует '."\n";