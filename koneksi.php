<?php
    // PHP Data Objects(PDO) Sample Code:
    try {
        $conn = new PDO("sqlsrv:server = tcp:radhsyn.database.windows.net,1433; Database = radhsyn83-db", "radhsyn83", "Sense324");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $stmt = $conn->query("SELECT * FROM register");
        while ($row = $stmt->fetch()) {
            echo $row['first_name']."<br />\n";
        }
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    // // SQL Server Extension Sample Code:
    // $connectionInfo = array("UID" => "radhsyn83@radhsyn", "pwd" => "Sense324", "Database" => "radhsyn83-db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    // $serverName = "tcp:radhsyn.database.windows.net,1433";
    // $conn = sqlsrv_connect($serverName, $connectionInfo);


?>