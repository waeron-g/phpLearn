
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

$name1 = $_POST['name1'];
$surname1 = $_POST['surname1'];
$age = $_GET['age'];
if (empty ($name1))
{
    $name1 = "Не заполнено имя";
}
if (empty ($surname1))
{
    $surname1 = "Не заполнена фамилия";
}
echo "Имя :$name1\nФамилия :$surname1\nВозраст :$age";


if (!empty($_POST))
    {
    $names = [];
    foreach ($_POST['name2'] as $name2)
    {
        $names[] = $name2;
    }
    $surnames = [];
    foreach ($_POST['surname2'] as $surname2)
    {
        $surnames[] = $surname2;
    }
    for ($i=0; $i < count($names) ; $i++)
    {
    echo " $names[$i] $surnames[$i] "; 
    }
    }
    else 
    {
        header('Location: /day2/theory.php');
    }


/**
 * Задание №1
 * необходимо обработать get форму таким образом, чтобы данные были не пусты, после чего вывести сообщение о полях, в которых ошибка
 * Задание №2
 * Найти причину того, почему лучше прописывать action в форме
 * Задание №3
 * Переписать форму так, чтобы при отправке post запроса одновременно передался и get запрос при помощи ссылки
 * Задание №4
 * Обработать post форму так, чтобы поля с одинаковым название преобразовались в единый объект. Например изначально есть массив [имя1, имя2] и массив [фамилия1, фамилия2] в массивы типа [[имя1, фамилия1], [имя2, фамилия2]]
 * 
 */
