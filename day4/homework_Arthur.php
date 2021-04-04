<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
</head>
<body>
<form action="./homework_Arthur_script.php" method="GET">
 <h1>Введите свои данные</h1>
 <label  for=""><input name="name" type="text" placeholder = "Имя"></label><br>
 <label for=""><input name="surname" type="text" placeholder = "Фамилия"></label><br>
 <label for=""><input name="comment" type="text" placeholder = "Комментарий"></label><br>
 <button name="action" value="add">Отправить комментарий</button><br>
 <button name="createdb" value="create">Создать таблицу посетителей</button>
 <button name="delitedbdb" value="create">Удалить таблицу посетителей</button>
 <button name="cleandb" value="create">Очистить таблицу посетителей</button>
<br>
<?
if ($_GET['error'])
{
    echo "Ошибка. Заполните все поля";
}


$link = "localhost";
$login = "mysql";
$pass = "mysql";
$db = "phplearn";

$sql = new mysqli($link, $login, $pass, $db);
$data = $sql->query("SELECT * FROM `visitorss`");
if ($data)
{
$result = mysqli_fetch_all($data, MYSQLI_ASSOC);
}
else
{
    echo "Таблица не создана. Создайте таблицу";
}
echo "<br>";
echo "<br>";
echo "<br>";

if ($result)
foreach ($result as $row)
{
    $id = $row['id'];
    $name = $row['name'];
    $surname = $row['surname'];
    $comment = $row['comment'];
    echo "Имя: $name <br> Фамилия: $surname <br> Комментарий: $comment<br><a href='./homework_Arthur_script.php?id=$id'>Удалить запись</a> <br> <br>";
}

$sql->close();
?>

 </body>
</html>