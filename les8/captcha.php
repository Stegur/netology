<?php

$code = random_int(1000, 9999);
session_start();
$_SESSION['code'] = $code;

//Код генерации картинки
$image = imagecreatetruecolor(300,300);

//RGB
$backColor = imagecolorallocate($image, random_int(1, 255), random_int(1, 255), random_int(1, 255));
$textColor = imagecolorallocate($image, random_int(1, 255), random_int(1, 255), random_int(1, 255));

$boxFile = __DIR__ . '/present.png';
if (!file_exists($boxFile)) {
    echo 'Файл с картинкой не найден';
    exit();
}
$imBox = imagecreatefrompng($boxFile);

imagefill($image, 0, 0, $backColor);
imagecopy($image, $imBox, 10, 10, 0, 0,256, 256);

$fontFile = __DIR__ . '/01.ttf';
if (!file_exists($fontFile)) {
    echo 'Файл с картинкой не найден';
    exit();
}

imagettftext($image, 50, 30, 50, 200, $textColor, $fontFile, $code);
header('Content-Type: image/png');

imagepng($image);
imagedestroy($image);