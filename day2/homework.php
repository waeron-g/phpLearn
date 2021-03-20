<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашка ебать</title>
</head>
<body>

<form action="./homework_script.php" method="GET">
 <h1>Задание №1</h1>
 <label for="">NAME<input name="name" type="text"></label><br>
 <label for="">SURNAME<input name="surname" type="text"></label><br>
 <button name="action" value="add">SEND</button>
 </form>

 <form action="" method="POST">
 <h1>Задание №2</h1>
 <label for="">NAME<input name="name" type="text"></label><br>
 <label for="">SURNAME<input name="surname" type="text"></label><br>
 <button name="action" value="add">SEND</button>
 </form>
 
<?
$name = $_GET['name'];
$surname = $_GET['surname'];
if (empty ($name))
{
    $name = "Не заполнено имя";
}
if (empty ($surname))
{
    $surname = "Не заполнена фамилия";
}
echo "Имя :$name\nФамилия :$surname";
?>

 <form action="./homework_script.php?age=17" method="POST">
 <h1>Задание №3</h1>
 <label for="">NAME<input name="name1" type="text"></label><br>
 <label for="">SURNAME<input name="surname1" type="text"></label><br>
 <button name="action" value="add">SEND</button>
 </form>


 <form action="./homework_script.php" method="POST">
 <h1>Задание №4</h1>
 <label for="">NAME1<input name="name2[]" type="text"></label><br>
 <label for="">SURNAME1<input name="surname2[]" type="text"></label><br>
 <label for="">NAME2<input name="name2[]" type="text"></label><br>
 <label for="">SURNAME2<input name="surname2[]" type="text"></label><br>
 <label for="">NAME3<input name="name2[]" type="text"></label><br>
 <label for="">SURNAME3<input name="surname2[]" type="text"></label><br>
 <button name="action" value="add">SEND</button>
 </form>   


</body>
</html>