<?php
$servername = "sqldevserver2020.mysql.database.azure.com";
$username = "martin";
$password = "Glob@nt13164078";
$db_name = "crud_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>