<?php
session_start();



  
if (!isset($_SESSION['count']))
{
  $_SESSION['count'] = 1;
}
else
{
  --$_SESSION['count'];
}
print_r($_SESSION);
echo $_SESSION['count'];
?>