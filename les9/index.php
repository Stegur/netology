<?php
require_once __DIR__ . '/functions.php';
if (isGuest()) {
    header('Location: login.php');
    die;
}
?>



<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
привет <?= $_SESSION['user']['username'] ?><br>
<ul>
    <li><a href="logout.php">Выйти</a></li>
    <li><a href="only_admins.php">ТОЛЬКО ДЛЯ АДМИНОВ</a></li>
</ul>
</body>
</html>