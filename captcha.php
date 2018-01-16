<?php
session_start();

$height = 50;
$width = 200;

$p = $_REQUEST['cid'];
$text = '';
for($i = 0; $i < rand(4, 5); $i++){
    $text = $text.$p[rand(0, 31)];
}

$im = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, $width, $height, $white);

$font = './Indie.ttf';

imagettftext($im, 40, -5, 25, 33, $black, $font, $text);

for($i = 0; $i < 10000; $i++){
    imagesetpixel($im, rand(1, 200), rand(1, 50), $grey);
}

for($i = 0; $i < 5; $i++){
    imageline($im, rand(0, $width), rand(0, $height), rand(0, $width), rand(0, $height), $black);
}

$_SESSION['sid'] = md5($text);

header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);
