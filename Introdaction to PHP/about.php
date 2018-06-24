<?php
$name = "Алексей";
$age = 27;
$city = "Симферополь";
$email = "stegura.alex@gmail.com";
$about = "Full stack web developer";
?>

<!doctype html>
<html lang="ru-en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>About</title>
</head>
<body>
<div style="width: 800px; height: 600px; margin: auto; text-align: center; box-shadow: 0 0  20px black;">
    <h1>Всем привет! Меня зовут <?= $name ?></h1>
    <p>Это моя первая страничка на PHP.</p>
    <p>Я бы хотел немного рассказать о себе:
        мне <?= $age ?> лет, Я живу в г. <?= $city ?></p>
    <p>Я учусь на <?= $about ?> в онлайн-университете "Нетология"</p>
    <p>Если Вас заинтересовали <a href="https://github.com/Stegur">мои работы</a>, связаться со мной можно по электронной почте: <?= $email ?></p>
</div>
</body>
</html>
