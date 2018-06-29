<?php

//$x = 1;
//
//if($x > 1){
//    echo "X > 1";
//}elseif($x == 1) {
//    echo "X = 1";
//}else{
//    echo "X < 1";
//}
//
////var_dump($x >= 1)

//$b = 7;
//
//switch ($b){
//    case 5:
//        echo "$b";
//        break;
//
//    case 1:
//        echo "1-2";
//        break;
//
//    default:
//        echo "default";
//        break;
//}

//$var = 5;
//$action = "+";
//
//switch ($action){
//    case "print":
//        echo "$var";
//        break;
//
//    case "+":
//        $var++;
//        echo "$var";
//        break;
//
//    case "-":
//        $var--;
//        echo "$var";
//        break;
//
//    default:
//        echo "default";
//}

//$x = 1;
//while ($x < 5){
//    echo $x . "<br/>";
//    $x++;
//}
//
//echo $x."<br/>";

//$x = 1;
//do {
//    echo $x."<br/>";
//    $x++;
//}while($x < 5);
//echo $x;

//for ($i = 0; $i < 10; $i++){
//    echo $i."<br/>";
//}

//$myArr = array(
//    "a",
//    "b",
//    "c",
//    "d"
//);
//
//echo "<pre>";print_r($myArr);echo "</pre>";
//
//foreach ($myArr as &$elem){
//    $elem = 1;
//}
//echo "<pre>";print_r($myArr);echo "</pre>";

//for ($i = 0; $i < 5; $i++){
//    if ($i == 2)
//        //break;
//        continue;
//
//    echo $i."<br>";
//}

//$i = 0;
//while (true){
//    switch ($i){
//        case 5:
//            echo "Итерация 5<br/>";
//            //Выходим из Switch
//            break 1;
//        case 10:
//            echo "Итерация 10<br/>";
//            //Выходим из While
//            break 2;
//        default:
//            break;
//    }
//    $i++;
//}

//function myFunc($x){
//    echo $x."<br>";
//    return $x;
//}
//
//$a = 5;
//var_dump(myFunc($a));

$test = "123";

function example1(){
    // secret fix
    GLOBAL $test;
    $test = "hello";
}
echo $test."<br/>";
example1();
echo $test."<br/>";

function example2(){
    static $x=0;
    echo $x."<br/>";
    $x++;
}
example2();
example2();
example2();
example2();
?>

<!--<select name="" id="">-->
<!--    <option value="">Выберите...</option>-->
<!--    <option value="">1</option>-->
<!--    <option value="">2</option>-->
<!--    <option value="">3</option>-->
<!--    <option value="">5</option>-->
<!--</select>-->
