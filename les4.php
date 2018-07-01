<?php

$a = 'Просто Строка';
$b = "Строка: $a";
$c = "Строка: {$a}";

$d = <<<Some
RERERE
RERERE
RERERE
RERERE
RERERE
Some;

$e = 'Д\'артаньян';

$result = 3.14 + '3.14';

$string = 'Hello Netology!';
$result = substr($string, 6, 8);
$result = str_replace('Netology','World', $string);
$result = strpos($string, 'Netology');
$result = md5('football');

var_dump($result);

?>

