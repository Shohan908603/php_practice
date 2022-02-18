
<?php


$im = imagecreatefromjpeg('index.jpg');
      
    
    $size = min(imagesx($im), imagesy($im));
      
    
    $im2 = imagecrop($im, ['x' => 290, 'y' => 150, 'width' => 300, 'height' => 250]);
    if ($im2 !== FALSE) {
        header("Content-type: image/png");
           imagepng($im2);
        imagedestroy($im2);
    }
    imagejpeg($im2, "crop.jpg");
    imagedestroy($im);


    ?>