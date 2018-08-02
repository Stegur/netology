<?php
//class Test
//{
//    private $private = 10;
//    public function __get($name)
//    {
////       echo 'Вы обратились к несуществующему свойству - ' . $name;
//        if (isset($this->$name))
//            return $this->$name;
//    }
//    public function __set($name, $value)
//    {
//        echo 'Ошибка присвоения значения. Свойство ' . $name . ' недоступно';
//    }
//}

//$test = new Test();
//echo $test->private;
//$test->some = 20;

//class TestClass
//{
//    private $data = [];
//    public function __set($name, $value)
//    {
//        $this->data[$name] = $value;
//    }
//
//    public function __get($name)
//    {
//        if (isset($this->data[$name]))
//            return $this->data[$name];
//    }
//}
//
//$test = new TestClass();
//$test->lalal = 5;
//echo '<pre>';
//var_dump($test);
//echo $test->lalal;

//class Test
//{
//    public function __call($name, $arguments)
//    {
//        echo "Вызван метод - " . $name . ' с параметрами:';
//        echo '<pre>';
//        var_dump($arguments);
//    }
//}
//
//$test = new Test();
//$test->someMethod(132, dfs, 78);


//
//function myAutoload($className)
//{
//    $filePath = './classes/' . $className . '.class.php';
//    if (file_exists($filePath)) {
//        include "$filePath";
//    }
//}
//
//
//function coreAutoload($className)
//{
//    $filePath = './core/' . $className . '.class.php';
//    if (file_exists($filePath)) {
//        include "$filePath";
//    }
//}
//
//
//spl_autoload_register('myAutoload');
//spl_autoload_register('coreAutoload');
//
//$test = new TestClass;


function myAutoload($classNameWithNamespase)
{
    $filePath = $_SERVER['DOCUMENT_ROOT']
    . str_replace('\\', DIRECTORY_SEPARATOR, $classNameWithNamespase)
    . '.php';
    if (file_exists($filePath)) {
        include "$filePath";
    }
}


