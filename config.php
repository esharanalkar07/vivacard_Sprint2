<?php
$host = 'vivacard.database.windows.net';
$username = 'vivacard';
$password = 'Mysql123';
$db_name = 'vivacarddb';

//Establishes the connection
$connect = mysqli_init();
mysqli_real_connect($connect, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
