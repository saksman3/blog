<?php
  $host ="localhost";
  $user = "root";
  $pass = "";
  $db = "blog";
  $dbcon = new mysqli($host,$user,$pass,$db);
  if($dbcon->error)
  {
    echo  $dbcon->error;
  }

?>
