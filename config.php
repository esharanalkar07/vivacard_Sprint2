<?php
    $serverName = "vivacard.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "vivacarddb", // update me
        "Uid" => "vivacard", // update me
        "PWD" => "Mysql123" // update me
    );
    //Establishes the connection
    $connect = sqlsrv_connect($serverName, $connectionOptions);


   /* $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
         FROM [SalesLT].[ProductCategory] pc
         JOIN [SalesLT].[Product] p
         ON pc.productcategoryid = p.productcategoryid";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
    */
?>
