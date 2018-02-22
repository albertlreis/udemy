<?php

//header("Content-Type: image/png");

//$image = imagecreate(256, 256);
//
//$black = imagecolorallocate($image, 0, 0, 0);
//
//$red = imagecolorallocate($image, 255, 0, 0);
//
//$green = imagecolorallocate($image, 0, 255, 0);
//
//$blue = imagecolorallocate($image, 0, 0, 255);
//
//imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "ALBERT REIS", $titleColor);
imagestring($image, 5, 440, 370, utf8_decode("Concluído em: ").DATE("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image, "Certificado-".date("Y-m-d").".jpeg", 10);

imagedestroy();