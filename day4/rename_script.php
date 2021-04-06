
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая книга | Изменить комментарий</title>
</head>
<body>
<? 
<<<<<<< HEAD
$id=$_GET['id'];
?>
=======
$id=$_GET['id'];?>
>>>>>>> 810ddb22272a19ca6124daf98f01cfc6a84bb18e
<form action='./homework_Arthur_script.php' method='GET'>
<h1>Введите свои данные, которые хотите поправить</h1>
<label  for=''><input name='name' type='text' placeholder = 'Имя'></label><br>
<label for=''><input name='surname' type='text' placeholder = 'Фамилия'></label><br>
<label for=''><input name='comment' type='text' placeholder = 'Комментарий'></label><br>
<<<<<<< HEAD
<button name='id1' value='<? echo $id ?>'>Отправить комментарий</button><br>
</form>


=======
<button name='id1' value='<?=$id?>'>Отправить комментарий</button><br>
</form>
>>>>>>> 810ddb22272a19ca6124daf98f01cfc6a84bb18e
 </body>
</html>

