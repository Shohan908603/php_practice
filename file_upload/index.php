<?php

if(isset($_FILES['file'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);

  


    header("Content-type: image/jpeg");
    $imgPath = 'image.jpg';
    $image = imagecreatefromjpeg($imgPath);
    $color = imagecolorallocate($image, 255, 255, 255);
    $string = "http://recentsolutions.net";
    $fontSize = 3;
    $x = 115;
    $y = 185;
    imagestring($image, $fontSize, $x, $y, $string, $color);
    imagejpeg($image);

    

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="submit" name="sub_btn">
      </form>
</body>
</html>