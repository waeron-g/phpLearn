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
 <label  for=""><input name="name" type="text" placeholder = "NAME"></label><br>
 <label for=""><input name="surname" type="text" placeholder = "SURNAME"></label><br>
 <label for=""><input name="comment" type="text" placeholder = "COMMENT"></label><br>
 <button name="action" value="add">Отправить комментарий</button><br>
 <button name="createdb" value="create">Создать базу данных</button>
 <button name="delitedbdb" value="create">Удалить базу данных</button>
 <button name="cleandb" value="create">Очистить базу данных</button>
 </form>
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
$query = "SELECT * FROM `visitorss`";
if ($_GET['surname'])
    $query =  $query."WHERE `surname` = '".$_GET['surname']."'";
$data = $sql->query($query);
if ($data)
$result = mysqli_fetch_all($data, MYSQLI_ASSOC);
echo "<br>";
echo "<br>";
echo "<br>";

if ($result)
foreach ($result as $key => $value)
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