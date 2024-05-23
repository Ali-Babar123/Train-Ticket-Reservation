<?php
    session_start();

    include 'trainconfig.php';
    // $loggedInUserMail = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ OPERATION</title>
    <link rel="stylesheet" href="../Css/home.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>

<body>
    <h2>Available Trains</h2>
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
    $train = $_POST["train"];
    $date = $_POST["date"];

    $sql = "SELECT * FROM trains WHERE name = '$train' AND date = '$date'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>From</th><th>To</th><th>Date</th><th>Time</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["source"] . "</td>";
                echo "<td>" . $row["destination"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["time"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



    
    ?>
    
    <!-- <?php
// if ($isAdmin) {
//     echo  '<a href="./deleterecord.php"><button class="btn btn-primary deletebtn" >Delete User Data</button></a>';
// } 
?> -->

</body>

</html>