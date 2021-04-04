<?php
/*
Принцип работы с файлами
1. Открыть файл
2. Работа с файлом и данными
3. Закрытие файла
*/

/*
    Про флаги можно прочесть тут.
    https://www.php.net/manual/ru/function.fopen.php
*/
//file_get_contents чтения файла в строку

//Запись данных в файл
$write = fopen("./write_to_file.txt", "a+"); // открываем файл на чтение и запись без удаления данных с указателем в конце файла
fwrite($write, "I WILL WRITE IT TO THE FILE AND PUT IT И добавлю кирллицу".PHP_EOL); // Записываем данные в файл PHP_EndOfLine
fclose($write); // Закрываем файл
echo "<h1>FGETS</h1>";
// Чтение данных из файла
$read = fopen("./write_to_file.txt", "r"); // Открытие
while ($line = fgets($read)) // Цикл, в котором идет запись строки в переменную $line, если она пуста, то цикл закончится
{
    var_dump($line);
}
fclose($read); // закрытие файла

//Работа с JSON файлами
$json = file_get_contents("students.json"); // Считываем весь файл в строку
var_dump($json);
$json = json_decode($json); // Кодируем строку в тип JSON
var_dump($json);
$json[] = array("POOP" => "IS GOOD"); // Работаем с JSON как с массивом и добавляем в конец элемент массива
$json[] = json_decode ('{
    "OBJECT" : "WTF",
    "SECOND ATTR" : "COOL"
}'); // Создаем объект JSON в виде строки и декодируем, после чего записываем в объект
echo "<H1> ELEMENT OF JSON</H1>";
var_dump($json[0]->group->code);
$json = json_encode($json); // Раскодируем объект в строку
var_dump($json);
$json_write = fopen("./Json1.json", "w+"); // Открываем файл на запись
fwrite($json_write, $json); // Записываем JSON в массив
fclose($json_write); // Закрываем
$json = json_decode(file_get_contents("Json1.json")); // Выводим записанные данные
var_dump($json);
$site = file_get_contents("https://www.php.net/manual/ru/function.fopen.php");
$site = mb_substr($site, mb_strpos($site, "<body") );
$site = explode("<p>", $site);
var_dump($site);


/**
 * Задание: Использовать выполненое домашнее задание от 4 дня, при этом переписать работу с базами данных под работу с json файлом. 
 * Эти знания потом могут пригодиться при работе с различными API, которые предоставляют данные в данном формате. Фильтрацию по имени можно не делать.
 */