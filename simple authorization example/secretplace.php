<?php
session_start();
$logged_user = $_SESSION["logged_user"];
if (!isset($logged_user)){
    header("Location: index.php");
    exit;
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secret page</title>
</head>
<body>
    <p>Hello, <?= $logged_user?>, you in secret page!</p>
    <p><a href="logout.php">Выйти</a></p>
</body>
</html>
