<?

//Замена подстроки в строке str_replace() OR str_ireplace()
$string1 = "TEST_STRING1";
var_dump(str_replace("EST", "Erability", $string1));
var_dump(str_ireplace("est", "Erability", $string1));
$array = array("E", "R", "B");
var_dump(str_ireplace($array, "ba", "TEST_STRING"));

//Поиск наличия подстроки в строке strpos() OR strrpos()
$string = "Съешь же еще этих мягких французских булок, да выпей чаю";
echo "<h1>Поиск в строке: <br> $string </h1>";
var_dump(strpos($string,"е"));
var_dump(strrpos($string,"е"));

//Конкатенация, разделение и склеивание строк
var_dump("Я хочу объединить ". "Эти строки с числом ". 24);
$explode = explode(" ", $string);
var_dump($explode);
var_dump(implode(" #__# ", $explode));

//Работа с массивами
echo "<h1>Работа с массивами</h1>";
// Добавление в конец массива
echo "<h1>Добавление в конец массива</h1>";
$explode[] = "WTF";
var_dump($explode);
array_push($explode, "WAT", "HELLO", "WORLD");
var_dump($explode);
// Добавление в начало массива
echo "<h1>Добавление в начало массива</h1>";
array_unshift($explode, "HELLO", "WORLD");
var_dump($explode);
//Извлечения из начала и конца массива
echo "<h1>Извлечение элементов из начала</h1>";
$word = array_shift($explode);
var_dump($word, $explode);
echo "<h1>Извлечение элементов из конца</h1>";
$word = array_pop($explode);
var_dump($word, $explode);
