<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга</title>
</head>
<body>
<form action="./homework_Arthur_d5_script.php" method="GET">
 <h1>Введите свои данные</h1>
 <label  for=""><input name="name" type="text" placeholder = "Имя"></label><br>
 <label for=""><input name="surname" type="text" placeholder = "Фамилия"></label><br>
 <label for=""><input name="comment" type="text" placeholder = "Комментарий"></label><br>
 <button name="action" value="add">Отправить комментарий</button>
 </form>
<?
 if ($_GET['error'])
{
    echo " <br>Ошибка. Заполните все поля <br>";
}
?>

 <br>
 <a href="./homework_Arthur_d5_script.php?createdb=create">Создать файл json</a>
 <br>
 <a href="./homework_Arthur_d5_script.php?delitedbdb=create">Удалить файл json</a>
 <br>
 <a href="./homework_Arthur_d5_script.php?cleandb=create">Очистить файл json</a>
 <br>


<form action="" method="GET">
<h2>Поиск по фамилии</h2>
<label  for=""><input name="fsurname" type="text" placeholder = "Введите фамилию"></label><br>
<button name="search" value="surname">Отфильтровать по фамилии</button>
</form>
<?
$searh_surname = $_GET['fsurname'];
if ($searh_surname)
echo "Фильтр: $searh_surname<br>"
?>
<a href="./homework_Arthur_d5.php">Очистить фильтрацию</a>
 <h2>Комментарии посетителей</h2>
<?


if (file_exists("./json_homework.json"))
{
$json = file_get_contents("json_homework.json");
$json = json_decode($json);
$i = 0;
if ($json)
{
foreach ($json as $key => $row)
    {
        $name = $row->NAME;
        $surname = $row->SURNAME;
        $comment = $row->COMMENT;
        if ($_GET['search'] == "surname")
        {
            if ($searh_surname == $surname)
            {
                echo "Имя: $name <br> Фамилия: $surname <br> Комментарий: $comment<br><a href=./homework_Arthur_d5_script.php?id=$key&action=delete'>Удалить запись</a><br><a href='./rename_script_d5.php?id=$key'>Редактировать запись</a><br><br><br>";
                $i = $i + 1;
            }
        }
        else
        {
            echo "Имя: $name <br> Фамилия: $surname <br> Комментарий: $comment<br><a href='./homework_Arthur_d5_script.php?id=$key&action=delete'>Удалить запись</a><br><a href='./rename_script_d5.php?id=$key'>Редактировать запись</a><br><br><br>";
        }

    }
    if ($_GET['search'] == "surname")
    {
    if ($i == 0)
        {
            echo "По фильтру: $searh_surname - ничего не найдено";
        }
    }

}
else echo 'Файл JSON пустой, добавьте комментарии';
}
else echo 'Файла JSON не существует';

?>

</body>
</html>