<?php
    $serverName = "vivacard.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "vivacarddb", // update me
        "Uid" => "vivacard@vivacard", // update me
        "PWD" => "Mysql123" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
?>
