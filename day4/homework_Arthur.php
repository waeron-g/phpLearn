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
 <button name="action" value="add">Отправить комментарий</button>
 </form>

 <br>
 <a href="./homework_Arthur_script.php?createdb=create">Создать таблицу посетителей</a>
 <br>
 <a href="./homework_Arthur_script.php?delitedbdb=create">Удалить таблицу посетителей</a>
 <br>
 <a href="./homework_Arthur_script.php?cleandb=create">Очистить таблицу посетителей</a>
 <br>

 <form action="" method="GET">
 <h2>Поиск по фамилии</h2>
 <label  for=""><input name="fsurname" type="text" placeholder = "Введите фамилию"></label><br>
 <button name="search" value="surname">Отфильтровать по фамилии</button>
 </form>
 <a href="./homework_Arthur.php">Очистить фильтрацию</a>

 <h2>Комментарии посетителей</h2>
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

if ($_GET['search'] == "surname")
{
    $where = "WHERE `surname`='".$_GET['fsurname']."'";
    $data = $sql->query("SELECT * FROM `visitorss` ".$where);
}
else
{
    $data = $sql->query("SELECT * FROM `visitorss`");
}
if ($data)
{
$result = mysqli_fetch_all($data, MYSQLI_ASSOC);
}
else
{
echo "Таблица не создана. Создайте таблицу";
}


if ($result)
foreach ($result as $row)
    {
       $id = $row['id'];
       $name = $row['name'];
       $surname = $row['surname'];
       $comment = $row['comment'];
       echo "Имя: $name <br> Фамилия: $surname <br> Комментарий: $comment<br><a href='./homework_Arthur_script.php?id=$id&action=delete'>Удалить запись</a><br><a href='./rename_script.php?id=$id'>Редактировать запись</a> <br><br> <br>";
    }


$sql->close();
?>
<<<<<<< HEAD
</body>
=======

 </body>
>>>>>>> cbfdee3f4c3c332613fb6d8492037d7c07cada9e
</html>