<?php

// Database Connection

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "car_garage";

$conn = mysqli_connect($hostname, $username, $password, $database_name);

if (!$conn) {
    die("Connection failed due to : " . mysqli_connect_error());
}