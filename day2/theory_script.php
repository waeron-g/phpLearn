<?
$sql = new mysqli("localhost", "mysql", "mysql", "phplearn");
    // if ( empty($_GET['name']) || empty($_GET['surname']))
    // {
    //     header("Location: /day2/theory.php?error");
    // }
    // else
    // if (!empty($_GET['name'] && !empty($_GET['surname'])))
    // {
    //     $sql->query("INSERT INTO `test` (`name`, `surname`) VALUES ('" .$_GET['name']. "', '".$_GET['surname']."')");
    //     header("Location: /day2/theory.php");
    // }

    if (!empty($_POST))
    {
        $names = [];
        foreach ($_POST['name'] as $name)
        {
            $names[] = $name;
        }
        $surnames = [];
        foreach ($_POST['surname'] as $surname)
        {
            $surnames[] = $surname;
        }
        if (count($names) == count($surnames))
        {
           $query = "";
           for ($i=0; $i < count($names) ; $i++) 
           { 
               $query .= "('".$names[$i]."', '".$surnames[$i]."')";
               if ($i+1 < count($names))
                $query .= ", ";
           }
           $sql->query("INSERT INTO `test` (`name`, `surname`) VALUES ".$query);
           header("Location: /day2/theory.php");
        }
    }
//     print_r("GET IS NOT EMPTY");
// var_dump($_GET);
// print_r($_POST);
// unset($_POST);
// var_dump($_POST);



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
