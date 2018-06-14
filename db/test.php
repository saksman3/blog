<?php
//error_reporting(all);
    require'dbcon.php';
require 'dbcon.php';
$query = "SELECT * From posts";
$result=$dbcon->query($query);
$rows=array();
while($row=$result->fetch_object())
{
  $rows[]=$row;
}
$result->free();

foreach($rows as $r)
{
  echo $r->post;
  echo $r->id;
}
$dbcon->close();
?>
