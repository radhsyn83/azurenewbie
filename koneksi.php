<?php
    $servername = "radhsyn.database.windows.net";
    $username = "radhsyn83";
    $password = "Sense324";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
?>