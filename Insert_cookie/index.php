<?php
// Verifying whether a cookie is set or not


setcookie('username','Shohan', time()+ "5", "/");


if(isset($_COOKIE["username"])){
    echo "Hi " . $_COOKIE["username"];
} else{
    echo "Welcome Guest!";


}
?>

