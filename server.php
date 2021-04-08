<?php //открываем пхп синтаксис
$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST); //помещаем массив данных пост    