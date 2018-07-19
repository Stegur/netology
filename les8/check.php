<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(400);
    echo 'Только post';
    exit();
}

if (empty($_POST['username'])) {
    http_response_code(400);
    echo 'Нет имени пользователя';
    exit();
}

if (empty($_POST['code'])) {
    http_response_code(400);
    echo 'не ввели код с картинки';
    exit();
}

session_start();

if ($_SESSION['code'] === (int)$_POST['code']) {
    echo 'Привет человек';
} else {
    echo 'Ты робот!';
}