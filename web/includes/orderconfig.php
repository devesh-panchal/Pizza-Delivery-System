<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "yummypizza";

// Create connection
$connection = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>