<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);

$red = imagecolorallocate($image, 255, 0, 0);

$green = imagecolorallocate($image, 0, 255, 0);

$blue = imagecolorallocate($image, 0, 0, 255);

imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

imagepng($image);

imagedestroy();