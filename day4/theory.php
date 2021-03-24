<?

// PROCEDURE STYLE
// $link = mysqli_connect("localhost", "my_user", "my_password", "world");

// /* check connection */ 
// if (!$link) {
//     printf("Connect failed: %s\n", mysqli_connect_error());
//     exit();
// }

// printf("Host information: %s\n", mysqli_get_host_info($link));

// /* close connection */
// mysqli_close($link);

//OOP STYLE
$link = "localhost";
$login = "mysql";
$pass = "mysql";
$db = "phplearn";

$sql = new mysqli($link, $login, $pass, $db);


// INSERT DATA INTO TABLE

if ($_GET['name'] && $_GET['surname'] && $_GET['action'] == "add")
{
    $sql->query("INSERT INTO `test` (`name`, `surname`) VALUES ('" .$_GET['name']. "', '".$_GET['surname']."')");
    var_dump($sql->errno, $sql->error);
}
//UPDATE DATA IN TABLE
if (($_GET['name'] || $_GET['surname']) && $_GET['action'] == "insert" && $_GET['id'])
{
    $values = [];
    if ($_GET['name'])
    $values[] = "`name`= '". $_GET['name']."'"; // `name`= 'value'
    if ($_GET['surname'])
    $values[] = "`surname`= '". $_GET['surname']."'"; // `surname` = 'value2'
    $values= implode(", ", $values); // `name`= 'value', `surname` = 'value2'
    if ($values)
    {
        $sql->query("UPDATE `test` SET ".$values." WHERE `id`= ".$_GET['id']); // UPDATE `test` SET  `name`= 'value', `surname` = 'value2' WHERE `id`= 2
    }
    var_dump($sql->errno, $sql->error);
}
//DELETE DATA FROM TABLE
if ($_GET['action']=="delete" && $_GET['id'])
{
    $sql->query("DELETE FROM `test` WHERE `id`=".$_GET['id']);
    var_dump($sql->errno, $sql->error);
}
//READ ALL DATA FROM TABLE
if ($_GET['action'] == "read" && !$_GET['col'] && !$_GET['val'])
{
    $data = $sql->query("SELECT * FROM `test`");
    $result = mysqli_fetch_all($data, MYSQLI_ASSOC); //ассоциативный массив
    var_dump($sql->errno, $sql->error);
    var_dump($result);
}
//READ ONE DATA FROM TABLE
if ($_GET['action'] == "read" && $_GET['col'] && $_GET['val'])
{
    $where = "WHERE `".$_GET['col']."`='".$_GET['val']."'"; // WHERE `column` = 'value' OR `column` = 'value2'
    $data = $sql->query("SELECT * FROM `test` ". $where);
    $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
    var_dump($sql->errno, $sql->error);
    var_dump($result);
}
//CREATE NEW TABLE
if ($_GET['action'] == "create")
{
    $sql->query("CREATE TABLE IF NOT EXISTS `oc_scheme_categories` (
        `id` int(11) NOT NULL primary key AUTO_INCREMENT,
        `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
        `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
        `cat_id` int(11) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        var_dump($sql->errno, $sql->error);
}
//UPDATE TABLE STUCTURE ADD
if ($_GET['action'] == "addcol")
{
    $sql->query("ALTER TABLE `oc_scheme_categories` ADD `desc` text COLLATE utf8mb4_unicode_ci");
    var_dump($sql->errno, $sql->error);
}
if ($_GET['action'] == "delcol")
{
    $sql->query("ALTER TABLE `oc_scheme_categories` DROP COLUMN `desc`");
    var_dump($sql->errno, $sql->error);
}
//DELETE TABLE
if ($_GET['action'] == "deltable")
{
    $sql->query("DROP TABLE `oc_scheme_categories`");
    var_dump($sql->errno, $sql->error);
}
//CLEAR TABLE
if ($_GET["action"] == "trunctable")
{
    $sql->query("TRUNCATE TABLE `oc_scheme_categories`");
    var_dump($sql->errno, $sql->error);
}
//CLOSE CONNECTION
$sql->close();
unset($sql);
/* Задание № 1
    Зарегестрироваться на сайте https://www.sql-ex.ru/ Выбрать внизу упражнения по SQL пункт SELECT (обучающий этап)
    после чего выполнить 5 заданий. 
    Задание № 2
    Создать небольшой сайт "гостевой книги" где будет отображаться имя, фамилия и комментарий посетителя.
    При этом работать с новой таблицей, которую создать нужно при помощи SQL запроса из PHP
    Функционал должен позволять создавать таблицу, удалять, очищать ее.
    Выбирать данные от людей с одинаковой фамилией, Выводить все данные, редактировать и удалять записи.
*/