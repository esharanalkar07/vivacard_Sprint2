<? php

// Define database
define('dbhost', '127.0.0.1');
define('dbuser', '');
define('dbpass', '');
define('dbname', 'localdb');


// Connecting database
try {
    $connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo $e->getMessage();
}



?>
 
 
 
