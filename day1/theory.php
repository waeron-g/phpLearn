<?php
// print_r("Цикл While");
// $i = 1;
// while ($i <= 10) // сначала проверяет, затем выводит, после увеличивает
// {
//     echo $i++;
// }
// print_r("Цикл Do-While");
// $i = 0;
// do { //всегда выполняется как минимум 1 раз
//     echo $i; 
// } while ($i > 0);

// print_r("Цикл for");
// for ($i = 1; $i <= 10; $i++) // изменение переменной происходит внутри конструкции
// {
//     echo $i;
// }
//print_r("Цикл foreach");
$array = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);
// print_r ($a['one']);
foreach ($array as $key => $element) // обрабатывает весь массив, можно выводить значения ключей в данном формате, или же оставить только значения убрав все между as и =>
{
    echo "\$a[$k] => $v.<br>";
}
?>
https://www.php.net/manual/ru/ref.strings.php