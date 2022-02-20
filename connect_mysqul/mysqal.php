<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("database could not connected" . mysqli_connect_error());
} else{
    echo "connection was succesful";
}

?>
   