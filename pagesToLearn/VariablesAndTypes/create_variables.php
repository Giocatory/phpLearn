<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Learn PHP</title>
</head>
<body>
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
?>
</body>
</html>
