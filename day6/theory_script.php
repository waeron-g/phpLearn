<?php
session_start();

$logs = fopen("./theory_log.txt", "a+");

$image = $_FILES['icon'];
if ($_GET['image'])
{
    unlink("./images/".$_GET['image']);
}

if (!empty($_POST['name']))
{
    setcookie("name", $_POST['name'], time()+60*5); // setcokie(имя переменной, значения, время истекания, откуда доступен куки)
}
if (!empty($_POST['surname']))
{
    setcookie("surname", $_POST['surname'], time()+30, "/"); // setcokie(имя переменной, значения, время истекания, откуда доступен куки)
}

try {
    if ($image['error'] > 0)
        throw new Exception("error upload file");
    if (explode("/", $image['type'])[0] != "image")
        throw new Exception("wrong type file");
    if (!$image_info = getimagesize($image['tmp_name']))
        throw new Exception("wrong type file inside");
    if ($image_info[0] <= 0 || $image_info[1] <= 0)
        throw new Exception("Can't get image size");
    $path = "./images/".date('Y-m-d-HH-mm-ss').'-'.$image['name'];
    if (!move_uploaded_file($image['tmp_name'], $path)) // move_uploaded_file(image, directory/name.type)
        throw new Exception("Can't upload image");
    $_SESSION['image'] = $path;
} catch (Exception $e) {
    fwrite($logs, date('d-m-Y H:m:s')." : ". $e->getMessage(). PHP_EOL);
}

fclose($logs);
header("Location: /day6/theory.php");

/*
ДЗ: скрипт из 4 дня доработать, добавив в таблицу новую колонку с ссылкой на изображения. 
Необходимо обработать файл, проверить его размер (не более 400х400) и не более 2 МБ. 
Должна быть возможность при редактировании изменять аватарку посетителя.
Картинка должна иметь уникальное имя, чтобы не перезаписывалась другими
*/