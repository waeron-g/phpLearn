<? session_start(); // стартуем сессию, обновляем время до ее смерти и получаем доступ к переменным
if ($_GET['clear_image'] == true)
{
    unset ($_SESSION['image']); // удаляем из сесии путь к изображению
    header("Location: /day6/theory.php");
}
$logs = file_get_contents("theory_log.txt");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMAGE UPLOAD</title>
</head>
<body>
<h1> ПРИВЕТ <?=$_COOKIE['surname']?> <?=$_COOKIE['name']?></h1>
<p> your unique ID is : <?=$_COOKIE['PHPSESSID']?></p>
<img src="<?=$_SESSION['image']?>" alt="">
<a href = "?clear_image=true">clear Image</a>
    <form action="./theory_script.php" method="POST" enctype="multipart/form-data">
    <label> name<input type="text" name="name"></label><br>
    <label> surname<input type="text" name="surname"></name><br>
    <input name="icon" type="file"><br>
    <button name = "action" value="upload">SUBMIT</button>
    </form>
<br><textarea style = "width:50vw; height:30vh; margin-top:10px;" disabled>
<?=$logs?>
</textarea>
<?php
$images = scandir('./images/');
var_dump($images);
array_shift($images);
array_shift($images);
foreach ($images as $image){?>
    <a href = "./theory_script.php?image=<?=$image?>"> Удалить <?=$image?></a><br>
<?}?>
</body>
</html>