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
echo "<p><b>Индексированные массивы</b></p>\n";
// моментальное создание массива
$days[0] = 'Sunday';
echo "days[0] = '$days[0]'";
echo "\n<br>days => ".gettype($days);
echo "<br>\n\n";

// PHP функция array
echo "<b>Через функцию array</b>\n<br>";
$days = array('Sunday', 'Monday', 'Thursday');
echo "days = array('Sunday', 'Monday', 'Thursday')\n<br>";
$count = 0;
foreach ($days as $day) {
    echo "days[$count] = '$day'\n<br>";
    $count = $count + 1;
}
echo "<hr>\n";
//Ассоциативные массивы (в других ЯП назвают Словари - ан. Dictionary)
// $value -> $key
echo "<p><b>Ассоциативные массивы</b></p>\n";
// Способ №1
$month['янв'] = 'Январь';
echo "month['янв'] = "."'".$month['янв']."'\n<br>";
echo "month => ".gettype($month)."\n<br>";
// Способ №2
echo "<b>Через функцию array</b>\n<br>";
$month = array('янв' => 'Январь', 'фев' => 'Февраль', 'мар' => 'Март');
echo "month = array('янв' => 'Январь', 'фев' => 'Февраль', 'мар' => 'Март')\n<br>";
foreach ($month as $keys => $value) {
    echo "month['$keys'] = '$value'\n<br>";
}
echo "<hr>\n";
echo "<p><b>Вывод индексированного массива в виде маркированного списка</b></p>\n";
echo "days = array('Sunday', 'Monday', 'Thursday')\n<br>";
echo 'foreach ($days as $day) {echo "&bull $day";}   &nbsp; &nbsp;//После &bull нужно \';\''."<br>\n";
foreach ($days as $day) {echo "&bull; $day <br>\n";}
?>
</body>
</html>
