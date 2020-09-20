<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "survey";

    $conn = mysqli_connect($server,$username,$password,$db);

    if (!$conn)
    {
        die("Could not connect to database " . mysqli_connect_error());
    }
?>