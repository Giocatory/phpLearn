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
// implode() - массив в строку, может добавлять разделитель после значений
echo <<<'TAG'
<b>Convert array to string</b><br>
$array_names = array("Mikhail", "Tatyana", "Margarita");<br>
$array_names_to_string = implode(" ", $array_names);<br>
echo $array_names_to_string; // Mikhail Tatyana Margarita<br><br>
TAG;

echo <<<'TAG2'
<b>Convert string to array</b><br>
$list_names = "Mikhail, Tatyana, Margarita";<br>
$array_names = explode(', ', $list_names);<br>
echo gettype($array_names); // array<br>
TAG2;
?>
</body>
</html>
