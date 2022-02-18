<?php




$img = imagecreatefromjpeg("image.jpg");


$txt = "Hello World \n I am shohan";
$fontFile = "C:\Windows\Fonts\arial.ttf"; 
$fontSize = 30;
$fontColor = imagecolorallocate($img, 255, 255, 0);
$posX = 80;
$posY = 100;
$angle = 20;
imagettftext($img, $fontSize, $angle, $posX, $posY, $fontColor, $fontFile, $txt);


header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);

?>