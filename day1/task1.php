<?
/* Сюжет: тебе дали задание на доработку некого форума, на котором произошел внезапный наплыв пользователей и привлек внимание. Первым делом тебе стоит проверить, что пользователи вводят верные данные при регистрации, смогут получить потом доступ к своему аккаунту и не навредят при этом сайту. Условия представлены ниже.
В случае успеха код сообщит об этом.
*/


/* arr struct:
* [str login, str pass, str email, str phone]
* Поля login, pass, email обязательны
* login: Только буквы, числа, - и _ без пробелов и спецсимволов 
* pass: 6-12 символов, одна заглавная, одно число, одна маленькая буква минимум
* phone: +7(123)456-78-90 без пробелов
*/

function validate_data (array $arr): bool
{
    // Твой код здесь
    return (1);
}

function testing()
{
    $count = 0;
    $all = 0;
    $data   = array(
        array ( 'name' => 'Jhon', 'pass' => '1Q2w3E', 'email' => 'Jhon@doe.com', 'phone' => '+7(800)555-35-35', 'key' => 1),
        array ( 'name' => 'Jhon', 'pass' => '1Q2w3', 'email' => 'Jhon@doe.com', 'phone' => '+7(800)555-35-35', 'key' => 0),
        array ( 'name' => 'Jhon', 'pass' => '1Q2w3E', 'email' => 'Jhon@doe.com', 'phone' => '+7(800)5a5-35-35', 'key' => 0),
        array ( 'name' => 'Jhon', 'pass' => '1Q2w3', 'email' => 'Jhon@doe.com', 'phone' => '+7(800)555-35-35', 'key' => 0),
        array ( 'name' => 'Jhon_DOE1', 'pass' => '1Q2w3EF1234a', 'email' => 'Jhon@doe.com', 'phone' => '+7(800)555-35-35', 'key' => 1),
        array ( 'name' => 'Jhon Doe', 'pass' => '1Q2w3E', 'email' => 'Jhon@doe.com', 'phone' => '+7(800)555-35-35', 'key' => 0),
        array ( 'name' => 'Jhon', 'pass' => '1Q2w3E', 'email' => 'Jhon@@@doe.com', 'phone' => '', 'key' => 0),
        array ( 'name' => 'Jhon', 'pass' => '2w3E*#$ads', 'email' => 'Jhon@doecom', 'phone' => '', 'key' => 0),
        array ( 'name' => 'Jhon', 'pass' => '1Q2w3E', 'email' => 'Jhon@doe.com', 'phone' => '', 'key' => 1),
        array ( 'name' => 'Jhon', 'pass' => '', 'email' => 'Jhon@doe.com', 'phone' => '+7(800)555-35-35', 'key' => 0),
    );
    foreach ($data as $task)
    {
        $all++;
        if (validate_data($task) == $task['key'])
            $count += 1;
        else
            var_dump($task);
    }
    if ($all == $count)
        print_r("Success");
}

testing();