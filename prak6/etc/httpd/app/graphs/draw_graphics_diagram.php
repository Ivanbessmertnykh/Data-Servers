<?php
require_once 'data.php';

$sum = array_sum($rows);
for($i = 0; $i < count($rows); $i++) {
    $rows[$i] = intval( round($rows[$i]*360/$sum) );
}

$img =  imagecreatetruecolor(201, 201);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

$cx = $cy = 100;
$w = $h = 200;

$start = 0;
foreach ($rows as $value) {
    $color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
    $angle_sector = $start + $value;
    imagefilledarc($img, $cx, $cy, $w, $h, $start, $angle_sector, $color, IMG_ARC_PIE);
    $start += $value;
}

$color = imagecolorallocate($img, 0, 0, 0);
ImageString($img,5,14,180,'ivan', $color);

header ("Content-type: image/png");
imagepng($img);
