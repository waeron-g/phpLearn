<?
/*
    Задача 1: создать массив, состоящий из нескольких имен людей, например "Василий", "Михаил" (не менее 6)
    После чего добавить еще одно имя в конец массива и извлечь одно из его начала
*/
$name_array = array("Леша","Саша","Гриша","Гоша","Алина","Вася","Ирина");
var_dump($name_array);
echo "<br>";
for ($i=0; $i < 8 ; $i++)
{
$name= array_shift($name_array);
array_push($name_array, $name);
}
var_dump($name_array);
echo "<br>";
/*
    Задача 2: Полученный в конце первой задачи массив склеить в одну строку, после чего заменить все буквы и или И на е
    вывести строку
*/
$name_str = implode(" ", $name_array);
echo "$name_str";
echo "<br>";
$istr = str_ireplace("и", "e", $name_str);
$istr = str_ireplace("И", "e", $istr);
echo "$istr";
echo "<br>";

/*
    Задача 3: разбить строку обратно на массив имен и добавить свое имя в начало массива
*/

$last_array = explode (" ", $istr);
var_dump($last_array);
echo "<br>";
array_unshift($last_array, "Артур");
var_dump($last_array);