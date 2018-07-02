<?php

//$a = 'Просто Строка';
//$b = "Строка: $a";
//$c = "Строка: {$a}";
//
//$d = <<<Some
//RERERE
//RERERE
//RERERE
//RERERE
//RERERE
//Some;
//
//$e = 'Д\'артаньян';
//
//$result = 3.14 + '3.14';
//
//$string = 'Hello Netology!';
//$result = substr($string, 6, 8);
//$result = str_replace('Netology','World', $string);
//$result = strpos($string, 'Netology');
//$result = md5('football');
//
//var_dump($result);

//$array = array('Egg1', 'Egg2', 'Egg3', 'Egg4', 'Egg5');         //php < 7
//$array = ['Egg1', 'Egg2', 'Egg3', 'Egg4', 'Egg5'];              //php > 7
//
//
//$cities = [
//    'Москва',
//    2 => 'Владивосток',
//    '8' => 'Рязань',
//    'Нижний Новгород'
//];
//
//$array[10] = 'Великий Новгород';
//
//unset($array[0]);
//
//
////$result = $array[3];
//echo '<pre>';
//print_r($array);
//
////for ($i = 0; $i < count($array); $i++){
////    echo $i, PHP_EOL;
////    echo $array[$i], PHP_EOL;
////    echo 'Next element <br/>';
////}
//
//foreach ($cities as $key => $city) {
//   //     echo $city, PHP_EOL;
//        echo $cities[$key], PHP_EOL;
//   //     echo 'Next element <br/>';
//}
//
//$names = [1 => 'Анна', 0 => 'Мария', 2 => 'Екатерина'];

//$result = implode(', ', $names);
//
//echo $result;
//
//$result2 = explode(', ', $result);

//$result = array_search('Анна', $names);

//$result = array_keys($names);

//$result = array_shift($names);

//$result = array_pop($names);
//$result = array_pop($names);

//shuffle($names);
//
////var_dump($result);
////
////echo '<pre>';
//print_r($names);

//for ($i = 0; $i < count($names); $i++) {
//    echo $i, PHP_EOL;
//    echo $names[$i], PHP_EOL;
//}


//$countries = [
//    'Russia' => ['Москва' => ['Арбат', 'Тверская'], 'Санкт-Петербург'],
//    'Germany' => ['Berlin', 'Munich'],
//    'USA' => ['Washington', 'San-Francisco']
//];
//
//shuffle($countries);
//
//echo '<pre>';
//print_r($countries);
//

//foreach ($countries as $key => $cities) {
//    echo '<b>' . $key . '</b><br>';
// //   echo print_r($city), '<br>';
//    foreach ($cities as $cityKey => $city) {
//        if (is_array($city )){
//            echo $cityKey, '<br>';
//            foreach ($city as $street) {
//                echo '<i>' . $street, '</i><br>';
//            }
//
//        }else {
//            echo $city, '<br>';
//        }
//    }
//}

//$names = [
//    'Анна',
//    'Мария',
//    'Екатерина'
//];
//
////$anna = $names[0];
////$maria = $names[1];
////$katya = $names[2];
//
//list($anna, $maria, $katya) = $names;
//
//echo '<pre>';
//var_dump($anna) ;
//var_dump($maria);
//var_dump($katya);

class Car
{
    var $brand;
    var $color;
    var $speed;

    function go($speed = 10)
    {
        $this->speed += $speed;
    }

    function describe()
    {

    }
}

$opel = new Car();
$opel->brand = 'Opel';
$opel->color = 'Yellow';

$mercedes = new Car();
$mercedes->brand = 'Mercedes';
$mercedes->color = 'Silver';

echo '<pre>';
print_r($opel);
print_r($mercedes);

$opel->go();
print_r($opel);

?>