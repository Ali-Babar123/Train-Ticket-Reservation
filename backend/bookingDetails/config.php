<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookingdetails";

// Create connection
$conn_booking = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn_booking->connect_error) {
    die("Connection failed: " . $conn_booking->connect_error);
}
?>