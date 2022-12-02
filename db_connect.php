<?php

/* Database connection start */
$servername = "localhost";
$username = "host1844592_main";
$password = "qazplmxcvbn122";
$dbname = "host1844592_db15";
$conn = mysqli_connect($servername, $username , $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>