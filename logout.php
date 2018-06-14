<?php
require'checksession.php';
if (session_status() == PHP_SESSION_ACTIVE)
 {
    session_unset($_SESSION['user']);
    session_destroy();
    header('location:signin.php');
 }
 //session_destroy();
 //echo session_status();



 ?>
