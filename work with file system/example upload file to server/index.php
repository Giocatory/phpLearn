<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file to server</title>
</head>
<body>
<fieldset>
    <legend>Отправка Файла на сервер</legend>
    <form action="parse.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000">
        <label title="Размер файла не более 3МБ">Загрузить файл: </label><br>
        <input type="file" name="myfile"><br>
        <input type="submit" value="Отпавить фаил">
    </form>
</fieldset>
</body>
</html>