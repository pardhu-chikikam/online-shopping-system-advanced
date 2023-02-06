<?php

$servername = "http://3.111.29.67/";
$username = "root";
$password = "Saradhi#123";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
