<?php
// Подключаемся к серверу
$connect = mysqli_connect("localhost", 'root', '', 'db1');
$sql = "SELECT * FROM shop";

$res = mysqli_query($connect, $sql);

while ($data = mysqli_fetch_assoc($res)) {
    
    echo 'Автомобиль ' .  $data['name'] . ' стоит ' . $data['price'] . '<hr>';
}