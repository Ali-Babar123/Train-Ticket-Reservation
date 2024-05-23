<?php 
include 'trainconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $source = $_POST["source"];
    $destination = $_POST["destination"];
    $date = $_POST["date"];
    $time = $_POST["time"];

        $sql = "INSERT INTO trains (name, source, destination, date, time) VALUES ('$name', '$source', '$destination', '$date', '$time')";

        if ($conn->query($sql) === TRUE) {
            echo 'Train Record Added Successfully';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
}
?>