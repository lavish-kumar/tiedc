<?php

// $conn = mysqli_connect('database-server-azure.mysql.database.azure.com','prashasy@database-server-azure','TrueStory@786');

//         if (!$conn) {
//             die("Connection failed: " . $conn);
//         } 
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:tiedc-azure.database.windows.net,1433; Database = tiedc", "tiedc-admin", "TrueStory@786");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}




?>
