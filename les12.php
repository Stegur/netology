<?php
class Test
{
    public function __get($name)
    {
       echo 'Вы обратились к несуществующему свойству - ' . $name;
    }
}

$test = new Test();
echo $test->lalala;
