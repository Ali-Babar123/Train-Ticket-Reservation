<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn_railway = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn_railway->connect_error) {
    die("Connection failed: " . $conn_railway->connect_error);
}
?>