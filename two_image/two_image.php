<?php
$dest = imagecreatefrompng('image.png');
$src = imagecreatefromjpeg('index.jpg');

imagealphablending($dest, false);
imagesavealpha($dest, true);

imagecopymerge($dest, $src, 250, 0, 0, 0, 600, 470, 100); //have to play with these numbers for it to work for you, etc.

header('Content-Type: image/png');
imagepng($dest);

imagedestroy($dest);
imagedestroy($src);
?>