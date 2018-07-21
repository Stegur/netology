<?php

if (!empty($_GET['font-size'])) {
    $fontSize = $_GET['font-size'];
    setcookie('font-size', $fontSize, time() +20);
}
$fontSize = 16;
if (!empty($_COOKIE['font-size'])) {
    $fontSize = $_COOKIE['font-size'];
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Демонстрация кук</title>
</head>
<body>
<p style="font-size:<?= $fontSize ?>px">Пример кук</p>
</body>
</html>