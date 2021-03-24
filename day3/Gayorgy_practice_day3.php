<?
echo "<h1>Задание 1</h1>";
$test_array = array("Андрей","Артур","Георгий","Иван","Петр","Алексей");
var_dump($test_array);
echo "<br>";
array_push($test_array, "Джон");
array_shift($test_array);
var_dump($test_array);
echo "<h1>Задание 2</h1>";
$stroka = implode(" ", $test_array);
echo "$stroka<br>";
$zamena = str_ireplace("и", "е",$stroka);
$zamena = str_ireplace("И", "е",$stroka);
echo "$zamena";
echo "<h1>Задание 3</h1>";
$explode = explode(" ", $zamena);
var_dump($explode);
echo "<br>";
array_unshift($explode, "Гоша");
var_dump($explode);
/*
    Задача 1: создать массив, состоящий из нескольких имен людей, например "Василий", "Михаил" (не менее 6)
    После чего добавить еще одно имя в конец массива и извлечь одно из его начала
*/

/*
    Задача 2: Полученный в конце первой задачи массив склеить в одну строку, после чего заменить все буквы и или И на е
    вывести строку
*/

/*
    Задача 3: разбить строку обратно на массив имен и добавить свое имя в начало массива
*/