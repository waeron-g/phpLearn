<?php

class bar
{
    public function bor($string)
    {
        var_dump($string);
    }

    private function baz($string)
    {
        return "LUPA ".$string ." PUPA";
    }

    protected function faz($string)
    {
        return $this->baz($string);
    }
}


class foo extends bar
{
    public function fro($string)
    {
        var_dump($this->faz($string));
    }

}

function another_function($string, $count)
{
    $data = [];
    for ($i=0; $i < $count; $i++) { 
        $data[$i] = $i." ".$string;
    }
    return $data;
}

function test($string)
{
    var_dump($string);
}


$pup = 'test';

var_dump(another_function("LOOP", 2));
$pup("TEST ME");

$foo = new foo();
$bar = new bar();

$bar->bor("TEST BAR CLASS WITH BOR FUNCTION");
$foo->bor("TEST FOO CLASS WITH BOR FUNCTION");

// $bar->baz("TEST BAR CLASS WITH BAZ FUNCTION");
// $bar->faz("TEST BAR CLASS WITH BAZ FUNCTION");

$foo->fro("TEST");

$a = "IT'S A VALUE";

function lose()
{
    $a = "IT'S Another A value";
    var_dump($a);
}

lose();

function add($a, $b)
{
    return $a + $b;
}

function multiple($a, $b)
{
    return $a * $b;
}

$action = "add";

function doAction($a, $b, $action)
{
   return $action($a, $b);
}

var_dump(doAction(3,2, $action));

$action = "multiple";
var_dump(doAction(3,2, $action));