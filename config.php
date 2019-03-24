<?/*php
session_start();

// Define database
define('dbhost', 'vivacard.database.windows.net');
define('dbuser', 'vivacard');
define('dbpass', 'Mysql123');
define('dbname', 'db_group_e_cm004');


// Connecting database
try {
    $connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
*/
?>

<? php
$connectstr_dbhost = 'vivacard.database.windows.net';
$connectstr_dbname = 'db_group_e_cm004';
$connectstr_dbusername = 'vivacard';
$connectstr_dbpassword = 'Mysql123';
foreach ($_SERVER as $key => $value) {
 if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
 continue;
 }
 $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
 $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
 $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
 $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}
$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);
if (!$link) {
 echo "Error: Unable to connect to MySQL." . PHP_EOL;
 echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
 echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
 exit;
}
?>

