<?php

// create a blank image
$image = imagecreatetruecolor(400, 400);

// fill the background color
$bg = imagecolorallocate($image, 0, 0, 0);

// choose a color for the ellipse
$col_outer = imagecolorallocate($image, 255, 0, 0);
$col_inner = imagecolorallocate($image, 255, 255, 255);
$color_rect = imagecolorallocate($image, 255, 0, 0);

// draw the white ellipse
imagefilledellipse($image, 200, 200, 200, 200, $col_outer);
imagefilledellipse($image, 200, 200, 150, 150, $col_inner);
imagefilledrectangle($image, 200, 110, 180, 275, $color_rect);
$angle = 35;

$image = imagerotate($image, $angle,0);
// output the picture
header("Content-type: image/png");
imagepng($image);


?>