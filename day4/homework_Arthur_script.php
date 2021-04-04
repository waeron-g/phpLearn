<?

$link = "localhost";
$login = "mysql";
$pass = "mysql";
$db = "phplearn";

$sql = new mysqli($link, $login, $pass, $db);

if ($_GET['createdb'] == "create")
{
    $sql->query("CREATE TABLE IF NOT EXISTS `visitorss` (
        `id` int(11) NOT NULL primary key AUTO_INCREMENT,
        `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
        `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
        `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        header("Location: /day4/homework_Arthur.php");
}

if ($_GET['delitedbdb'] == "create")
{
    $sql->query("DROP TABLE `visitorss`");
    header("Location: /day4/homework_Arthur.php");
}

if ($_GET["cleandb"] == "create")
{
    $sql->query("TRUNCATE TABLE `visitorss`");
    header("Location: /day4/homework_Arthur.php");
}

if ($_GET['action'] == "add")
{

if ($_GET['name'] && $_GET['surname'] && $_GET['comment'] )
{
    $sql->query("INSERT INTO `visitorss` (`name`, `surname`, `comment`) VALUES ('" .$_GET['name']. "', '".$_GET['surname']."', '".$_GET['comment']."')");
    header("Location: /day4/homework_Arthur.php");
}
else
{
    header("Location: /day4/homework_Arthur.php?error=1");
}
}

if ($_GET['action'] == "delete")
{
    $sql->query("DELETE FROM `visitorss` WHERE `id`=".$_GET['id']);
    header("Location: /day4/homework_Arthur.php");
}

if ($_GET['id1'])
{

if ($_GET['name'] && $_GET['surname'] && $_GET['comment'])
{
    $values = [];
    if ($_GET['name'])
    $values[] = "`name`= '". $_GET['name']."'";
    if ($_GET['surname'])
    $values[] = "`surname`= '". $_GET['surname']."'"; 
    if ($_GET['comment'])
    $values[] = "`comment`= '". $_GET['comment']."'"; 
    $values= implode(", ", $values);
    if ($values)
    {
        $sql->query("UPDATE `visitorss` SET ".$values." WHERE `id`= ".$_GET['id1']);
    }
    header("Location: /day4/homework_Arthur.php");
}
else
{
    $id=$_GET['id1'];
    header("Location: /day4/rename_script.php?id=$id");
}
}

?>