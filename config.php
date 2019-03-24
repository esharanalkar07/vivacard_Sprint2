<?php
$connect = mysqli_connect("vivacard.database.windows.net","vivacard","Mysql123","vivacarddb");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
