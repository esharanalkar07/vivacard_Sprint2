

// PHP Data Objects(PDO) Sample Code:
<? php
try {
    $conn = new PDO("sqlsrv:server = tcp:vivacard.database.windows.net,1433; Database = vivacarddb", "vivacard", "Mysql123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "vivacard@vivacard", "pwd" => "Mysql123", "Database" => "vivacarddb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vivacard.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>

