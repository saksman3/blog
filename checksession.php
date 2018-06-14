<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['user']))
{
$error = 1;
 header('location:signin.php?error=1');

}


 ?>
