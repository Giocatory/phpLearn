<?php
//where save upload files
$upload_dir = 'C:\localhost\phpLearn\work with file system\example upload file to server\upload';
$destination = $upload_dir . "\\" . $_FILES['myfile']['name'];
echo "<pre>";
if (move_uploaded_file($_FILES['myfile']['tmp_name'], $destination)){
    /*Перемещаем файл из временной папки в выбранную директорию для хранения*/
    echo "Фаил успешно загружен!";
}
else{
    echo "Произошла какая-то ошибка: <br>";
    print_r($_FILES);
}
echo "</pre>";
