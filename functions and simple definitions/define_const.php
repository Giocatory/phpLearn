<?php
// раньше писали так -> define('LOCAL_HOST', '127.0.0.1');
const LOCAL_HOST = '127.0.0.1';
echo LOCAL_HOST . "\n"; # 127.0.0.1

// Константы массивов
// Раньше писали так -> define('WEEK', ['пн','вт','ср','чт','пт','сб','вс']);
const WEEK = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
print_r(WEEK);
//Array
//(
//      [0] => пн
//      [1] => вт
//      [2] => ср
//      [3] => чт
//      [4] => пт
//      [5] => сб
//      [6] => вс
//)

// Константы используются без знака $
echo "OS - " . PHP_OS . "\n";
echo "Php binary - " . PHP_BINARY . "\n";
echo "php version - " . PHP_VERSION . "\n";
