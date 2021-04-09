<?
if ($_GET['action'] == "add")
{

if ($_GET['name'] && $_GET['surname'] && $_GET['comment'] )
{ 
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $comment = $_GET['comment'];
    $json = file_get_contents("./json_homework.json");
    $json = json_decode($json);
    $json[] = array("NAME" => $name, "SURNAME" => $surname, "COMMENT" => $comment);
    $json = json_encode($json);
    $json_write = fopen("./json_homework.json", "w+");
    fwrite($json_write, $json);
    fclose($json_write);
    header("Location: /day5/homework_Arthur_d5.php");

}
else if ($_GET['action'] == "add")
{
    header("Location: /day5/homework_Arthur_d5.php?error=1");
}
}

if ($_GET['delitedbdb'] == "create")
{
    if (file_exists("./json_homework.json"))
    {
        unlink("./json_homework.json");
        header("Location: /day5/homework_Arthur_d5.php");
        
    }
    else
    {
        header("Location: /day5/homework_Arthur_d5.php");
    }
}

if ($_GET['createdb'] == "create")
{
    if (file_exists("./json_homework.json"))
    {
        header("Location: /day5/homework_Arthur_d5.php");
    }
    else
    {
        file_put_contents("./json_homework.json", '');
        header("Location: /day5/homework_Arthur_d5.php");
    }
}

if ($_GET['cleandb'] == "create")
{
    if (file_exists("./json_homework.json"))
    {
        file_put_contents("./json_homework.json", null);
        header("Location: /day5/homework_Arthur_d5.php");
    }
    else
    {
        header("Location: /day5/homework_Arthur_d5.php");
    }
}

if ($_GET['action'] == "delete")
{   
    $json = file_get_contents("json_homework.json");
    $json = json_decode($json);
    $id = $_GET['id'];
    unset($json[$id]);
    $json = array_values($json);
    $json = json_encode($json);
    $json_write = fopen("./json_homework.json", "w+");
    fwrite($json_write, $json);
    fclose($json_write);
    header("Location: /day5/homework_Arthur_d5.php");
}


if ($_GET['rename'] == "switch")
{
 if ($_GET['name'] || $_GET['surname'] || $_GET['comment'])
 {   
    $json = file_get_contents("json_homework.json");
    $json = json_decode($json);
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $comment = $_GET['comment'];
    $id = $_GET['id'];
    foreach ($json as $key => $row)
    {
        if ($key == $id)
        {

            if ($name) $row->NAME = $name;
            if ($surname) $row->SURNAME = $surname;
            if ($comment) $row->COMMENT = $comment;
        }
    }
    $json = json_encode($json);
    $json_write = fopen("./json_homework.json", "w+");
    fwrite($json_write, $json);
    fclose($json_write);
    header("Location: /day5/homework_Arthur_d5.php");
 }
}

?>