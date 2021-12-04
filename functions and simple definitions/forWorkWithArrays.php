<?php
$my_array = array(5,1,9,3,2);
$elem = 3;

echo count($my_array);  # возвращает количество элементов массива.
echo "\n";
echo in_array($elem, $my_array);  # (вернет (int)bool) проверяет, содержится ли элемент $elem в массиве $array.
echo "\n";
echo array_search($elem,  $my_array);  # (вернет индекс) проверяет,  содержится  ли  элемент  $elem  в массиве $array,
echo "\n";

$new_array = array_values($my_array);  # возвращает новый массив, содержащий все значения переданного на вход массива.
foreach ($new_array as $item){echo "$item, ";}
echo "\n";
$new_array = array_keys($my_array);  # возвращает новый массив, содержащий все индексы в качестве значений переданного на вход массива.
foreach ($new_array as $item){echo "$item, ";}
echo "\n";

$my_array = array(5 => 'five', 4 => 'four', 2 => 'two', 1 => 'one', 3 => 'three');
rsort($my_array);  # выполняет сортировку массива в обратном порядке.
foreach ($new_array as $key => $value){echo "$key => $value, ";}
echo "\n";
asort($my_array);  # простая  сортировка  с  сохранением  ассоциаций  ключей.
foreach ($new_array as $key => $value){echo "$key => $value, ";}
echo "\n";
arsort($my_array);  # обратная сортировка с сохранением ассоциаций ключей.
foreach ($new_array as $key => $value){echo "$key => $value, ";}
echo "\n";
ksort($my_array);  # сортировка массива по ключам.
foreach ($new_array as $key => $value){echo "$key => $value, ";}
echo "\n";
krsort($my_array); # обратная сортировка массива по ключам.
foreach ($new_array as $key => $value){echo "$key => $value, ";}
echo "\n";


/*
$flag = SORT_NUMERIC;
sort($array, [$flag]);  # сортирует массив $array в зависимости от необязательного  параметра  $flag.
#  Если  значение  $flag  задать  SORT_REGULAR,  то  произойдет  обычное  сравнение  элементов;
#  если  SORT_NUMERIC,  то  числовое сравнение элементов; если SORT_STRING,
# то строковое сравнение элементов.
foreach ($new_array as $item){echo "$item, ";}
$flag = SORT_REGULAR;
sort($array, [$flag]);
foreach ($new_array as $item){echo "$item, ";}
*/

