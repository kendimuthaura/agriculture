<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "ItsKendi@89";
    $dbName = "sourcecodester_agroculturedb";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
