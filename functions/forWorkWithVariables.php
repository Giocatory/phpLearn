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

# intval()
// Преобразование типа, возвращает целое значение переменной
echo 'intval(\'5.5df\') => ' . intval('5.5df')."\n";
echo 'intval(\'5.5\') => ' . intval('5.5')."\n";
echo 'intval(\'qd5.5\') => ' . intval('qd5.5')."\n";
echo 'intval(\'qdqwdqw\') => ' . intval('qdqwdqw')."\n";
echo 'intval(\'array(1,2)\') => ' . intval('array(1,2)')."\n";
echo 'intval(\'null\') => ' . intval('null')."\n"."\n";
//intval('5.5df') => 5
//intval('5.5') => 5
//intval('qd5.5') => 0
//intval('qdqwdqw') => 0
//intval('array(1,2)') => 0
//intval('null') => 0


# floatval()
// Тоже самое что и intval(), только возвращает число с плавающей точкой
echo 'floatval(\'5\') => ' . floatval('5')."\n";
echo 'floatval(\'5.5df\') => ' . floatval('5.5df')."\n";
echo 'floatval(\'5.5\') => ' . floatval('5.5')."\n";
echo 'floatval(\'qd5.5\') => ' . floatval('qd5.5')."\n";
echo 'floatval(\'qdqwdqw\') => ' . floatval('qdqwdqw')."\n";
echo 'floatval(\'array(1,2)\') => ' . floatval('array(1,2)')."\n";
echo 'floatval(\'null\') => ' . floatval('null')."\n";
//floatval('5') => 5
//floatval('5.5df') => 5.5
//floatval('5.5') => 5.5
//floatval('qd5.5') => 0
//floatval('qdqwdqw') => 0
//floatval('array(1,2)') => 0
//floatval('null') => 0


//abs($number) – возвращает абсолютное значение $number.

//round($num, [$precision], [$mode]) – возвращает округлённое значение $num
//с  указанной  точностью  $precision (количество  цифр  послезапятой).
// $precision может быть отрицательным или нулём (по умолчанию).

//ceil($num) – возвращает ближайшее большее целое от $num.

//mt_rand([$min], [$max]) – генерирует случайное значение методом с помощью  генератора  простых  чисел.
//$min  –  необязательный  параметр:  минимальное  значениеслучайного  числа  (по  умолчанию:  0).
//$max  –  необязательный параметр: максимальное значение случайного числа

echo mt_rand(0, 10); // от 0 включительно до 10 включительно - т.е. [0;10]