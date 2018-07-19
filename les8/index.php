<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка капчи</title>
</head>
<body>
<form action="check.php" method="post">
    Имя:
    <input name="username">
    <br><br>
    <img src="captcha.php">
    <br><br>
    введите код с картинки
    <br><br>
    <input name="code">
    <input type="submit" value="Я не робот">

</form>
</body>
</html>