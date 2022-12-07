<?php
require_once 'data.php';

$width = 200;
$height = 200;
$rowWidth = 30;
$rowInterval = 5;

$img = imagecreatetruecolor($width, $height);

$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

for($i = 0, $y1 = $height, $x1 = 0; $i < count($rows); $i++) {
    $color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
    $y2 = $y1 - $rows[$i]*$height/100;
    $x2 = $x1 + $rowWidth;
    imagefilledrectangle($img, $x1, $y1, $x2, $y2, $color);
    $x1 = $x2 + $rowInterval;
}

$color = imagecolorallocate($img, 0, 0, 0);
ImageString($img,5,14,180,'ivan', $color);

header("Content-type: image/png");
imagepng($img);
