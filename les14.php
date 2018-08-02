<?php //конфиг
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', '');

echo '<pre>';

try {

//соеденение с БД
    $connect_str = DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
    $db = new PDO($connect_str, DB_USER, DB_PASS);

// вставляем несколько строк в таблицу
    
    $rows = $db->exec("INSERT INTO `testing` VALUES
(null, 'iVAN', 'ivan@mail.ru'),
(null, 'petr', 'petr@mail.ru'),
(null, 'vasya', 'vasya@mail.ru')
");

// в случае оштбки в SQL выражении выведем ошибку
    
    $error_array = $db->errorInfo();
    
    if ($db->errorCode() != 0000) {
        echo "SQL ошибка: " . $error_array[2] . '<br>';
    }

// если запрос выведен успешно выведем колличество затронутых строк
    
    if ($rows) {
        echo "Колличество затронутых строк: " . $rows . '<br>';
    }

// теперь выберем нескольк строк из базы
    
    $result = $db->query("SELECT * FROM `testing` LIMIT 2");
    
    $error_array = $db->errorInfo();
    
    if ($db->errorCode() != 0000) {
        echo "SQL ошибка: " . $error_array[2] . '<br>';
    }
    
    while ($row = $result->fetch()) {
        print_r($row);
    }
    
    var_dump($rows);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}