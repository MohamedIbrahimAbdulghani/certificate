<?php

header("Content-type: image/jpeg");
$font = realpath("/fonts/arial.ttf");
$image = imagecreatefromjpeg("/images/cer.jpg");
$color = imagecolorallocate($image, 51, 51, 102);
$student_name = "Mohamed Ibrahim";
imagettftext($image, 20, 0, 100, 100, $color, $font, $student_name);
imagejpeg($image);
imagedestroy($image);




?>