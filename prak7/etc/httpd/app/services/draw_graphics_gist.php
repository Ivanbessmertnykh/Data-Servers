<?php
function generate_data(): array
{
    return array(random_int(1, 100), random_int(1, 100), random_int(1, 100), random_int(1, 100), random_int(1, 100), random_int(1, 100));
}

$values = generate_data();

$columns = count($values);

$width = 200;
$height = 100;

$padding = 5;

$column_width = $width / $columns;

$im = imagecreate($width, $height);
$gray = imagecolorallocate($im, 0xcc, 0xcc, 0xcc);
$gray_lite = imagecolorallocate($im, 0xee, 0xee, 0xee);
$gray_dark = imagecolorallocate($im, 0x7f, 0x7f, 0x7f);
$white = imagecolorallocate($im, 0xff, 0xff, 0xff);

imagefilledrectangle($im, 0, 0, $width, $height, $white);
$maxv = 0;

for ($i = 0; $i < $columns; $i++) $maxv = max($values[$i], $maxv);

for ($i = 0; $i < $columns; $i++) {
    $column_height = ($height / 100) * (($values[$i] / $maxv) * 100);

    $x1 = (int) ($i * $column_width);
    $y1 = (int) ($height - $column_height);
    $x2 = (int) ((($i + 1) * $column_width) - $padding);
    $y2 = $height;

    imagefilledrectangle($im, $x1, $y1, $x2, $y2, $gray);

    imageline($im, $x1, $y1, $x1, $y2, $gray_lite);
    imageline($im, $x1, $y2, $x2, $y2, $gray_lite);
    imageline($im, $x2, $y1, $x2, $y2, $gray_dark);
}

$color = imagecolorallocate($im, 0, 0, 0);
imagestring($im,5,0,0,'ivan', $color);

header("Content-type: image/png");
imagepng($im);
