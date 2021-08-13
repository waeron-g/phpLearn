<?php
function compare($data, $i, $ans, $function)
{
    $response = $function($data);
    if ( $response === $ans)
        print_r ("<b>test $i success</b><br>");
    else
    {
        print_r ("<b>test $i failed in function $function()</b><br>");
        print_r ("Your answer: $response <br>");
        print_r ("actual answer: $ans <br>");
    }
}

/*
Задание № 1
Реализовать функцию, считающую среднее арифметическое из чисел внутри массива
На вход всегда подается массив, он может быть пуст, или же элементы могут не являться числами
Не числа в массиве необходимо фильтровать, при пустом массиве возвращать null
*/

function getAVG($array)
{
    // Твой код здесь
    return null;
}
print_r("<h3>test getAVG() function</h3>");
compare([1,2,3,4,5], 1, 3, "getAVG");
compare([1,2,"banana",4,5], 2, 3, "getAVG");
compare([1,2,3,4,5, [1, 2, 3, "apple", "banana"]], 3, 3, "getAVG");

/*
Задание № 2
Реализовать функцию, отбирающую только опубликованные записи
На вход подается массив, содержащий в себе подмассивы с ключами title, text, status он может быть пуст
Необходимо вернуть количество записей со статусом 1, при пустом массиве возвращать null
*/

function getPublishedPosts($array)
{
    // Твой код здесь
    return null;
}

$array = [
    [
        "title"     => "MY first POST",
        "text"      => "Hello, World!",
        "status"    => 1
    ],
    [
        "title"     => "MY second POST",
        "text"      => "Lorem Ipsum",
        "status"    => 0
    ],
    [
        "title"     => "MY third POST",
        "text"      => "Dolos Sit Amet",
        "status"    => 1
    ],
    [
        "title"     => "MY fourth POST",
        "text"      => "O KURWA!",
        "status"    => 3
    ],
];
print_r("<h3>test getPublishedPosts() function</h3>");
compare([], 4, null, "getPublishedPosts");
compare([1,2,"banana",4,5], 5, null, "getPublishedPosts");
compare($array, 6, 2, "getPublishedPosts");


/*
Задание № 3
Реализовать функцию, считающую количество простых чисел в диапазоне от 1 до входящего целого числа
В случае передачи другого типа данных или их отсутствия возвращать null
Необходимо вернуть количество простых чисел в диапазоне
*/

function getSimpleNumCount($number)
{
    // Твой код здесь
    return null;
}

print_r("<h3>test  getSimpleNumCount() function</h3>");
compare([], 7, null, "getSimpleNumCount");
compare("banana", 8, null, "getSimpleNumCount");
compare(1, 9, 1, "getSimpleNumCount");
compare(null, 10, null, "getSimpleNumCount");
compare(1000, 11, 168, "getSimpleNumCount");
