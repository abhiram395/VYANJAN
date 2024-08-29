<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "signin"; // Replace with your actual database name

    // Create connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection to this database failed: " . mysqli_connect_error());
    }
    echo "Connection successful";
?>
