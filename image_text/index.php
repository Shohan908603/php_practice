<?php




$img = imagecreatefromjpeg("index.jpg");


$txt = "Hello World \n I am shohan";
$fontFile = "C:\Windows\Fonts\arial.ttf"; 
$fontSize = 20;
$fontColor = imagecolorallocate($img, 255, 255, 255);
$posX = 70;
$posY = 80;
$angle = 0;
imagettftext($img, $fontSize, $angle, $posX, $posY, $fontColor, $fontFile, $txt);


header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);

?>