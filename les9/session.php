<?php
session_start();

if (!empty($_SESSION['x'])) {
    var_dump($_SESSION['x']);
} else {
    $_SESSION['x'] = 20;
}

echo '<pre>';
var_dump($_SESSION);