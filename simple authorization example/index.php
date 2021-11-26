<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Learn PHP</title>
</head>
<body>
<header class="main_header">
    <ul class="main_header_nav">
        <li class="nav_li"><a href="#">Home</a></li>
        <li class="nav_li"><a href="#">Author</a></li>
        <li class="nav_li"><a href="#">Contacts</a></li>
    </ul>
</header>
<main>
    <h1 class="main_text">Персональный блог про PHP</h1>
    <form action="authorize.php" method="post" class="main_form">
        <label class="main_form_label">Имя пользователя:</label><br>
        <input type="text" name="username" class="form_login" placeholder="user name"><br>
        <label class="main_form_label">Пароль:</label><br>
        <input type="password" name="password" class="form_pass" placeholder="password"><br>
        <input type="submit" name="Submit" class="form_submit" value="Войти">
    </form>
</main>


</body>
</html>