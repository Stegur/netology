<?php
require_once __DIR__ . '/functions.php';
if (!isGuest()) {
    header('Location: index.php');
}
$errors = [];
if (!empty($_POST)) {
    if (login($_POST['login'], $_POST['password'])) {
        header('Location: index.php');
    } else {
        $errors[] = 'Неверный логин или пароль';
    }
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
Авторизация
<ul>
<?php foreach ($errors as $error) : ?>
    <li><?= $error ?></li>
<?php endforeach; ?>
</ul>
<form action="login.php" method="post">
    <input type="text" name="login" placeholder="Логин"><br>
    <input type="password" name="password" placeholder="Пароль"><br>
    <input type="submit" value="Войти">
</form>

</body>
</html>