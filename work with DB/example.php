<?php
$db = new mysqli("localhost", "root", "root");
$db->select_db("my_simple_bd");

if($db->connect_error){
    die("Ошибка: " . $db->connect_error);
}
echo "Подключение успешно установлено\n";

$sql_query = 'SELECT * FROM articles';
if ($id = $db->query($sql_query)){
    echo "id"."\t|\t"."title"."\t|\t"."description"."\t|\t"."author"."\t|\t"."date_create"."\n";
    foreach ($id as $row){
        echo $row["id"]."\t|\t".$row["title"]."\t|\t".$row["description"]."\t|\t".$row["author"]."\t|\t".$row["date_create"]."\n";

    }
}
