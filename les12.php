<?php
class Test
{
    private $private = 10;
    public function __get($name)
    {
//       echo 'Вы обратились к несуществующему свойству - ' . $name;
        if (isset($this->$name))
            return $this->$name;
    }
}

$test = new Test();
echo $test->private;
