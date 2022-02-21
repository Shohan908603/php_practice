<?php
$dest = imagecreatefromjpeg('index.jpg');
$src = imagecreatefrompng('image.png');

imagealphablending($dest, false);
imagesavealpha($dest, true);

imagecopymerge($dest, $src, 200, 9, 0, 0, 100, 200, 100); //have to play with these numbers for it to work for you, etc.

header('Content-Type: image/png');
imagepng($dest);

imagedestroy($dest);
imagedestroy($src);
?>