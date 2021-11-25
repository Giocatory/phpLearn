<?php
// open session
session_start();
// get info from <form>
$submit = $_POST["Submit"];
$userName = $_POST["username"];
$password = $_POST["password"];
// info from <Form>?
if ($submit){
    // data validation
    if ($userName == "Mikhail" && $password == "asembler110level"){
        // remember the username
        $_SESSION["logged_user"] = $userName;
        // redirect to the desired page
        header("Location: secretplace.php");
        exit;
    }
}
// If something went wrong, the user will receive an error message
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ErrorPage</title>
</head>
<body>
Вам нужно регистрироваться!!!
<a href="index.php">Вернуться обратно</a>
</body>
</html>
