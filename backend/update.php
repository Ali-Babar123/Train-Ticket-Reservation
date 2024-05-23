<?php 
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phone"];
    $password = $_POST["password"];

    // Check if the record with the given email exists
    $checkSql = "SELECT * FROM users WHERE email = '$email'";
    $checkResult = $conn_railway->query($checkSql);

    if ($checkResult === FALSE) {
        echo "Error executing query: " . $conn_railway->error;
    } elseif ($checkResult->num_rows > 0) {
        // Record exists, proceed with the update
        $updateSql = "UPDATE users SET fname='$name', phonenumber='$phonenumber', password='$password' WHERE email='$email'";

        if ($conn_railway->query($updateSql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn_railway->error;
        }
    } else {
        echo "Error: Record with email does not exist.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE </title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
<body>
    <form method="post" action="">

        <!-- Update Operation -->
        <h2>Update User</h2>
        <label for="update_name" >Name: </label>
        <input type="text" name="name" placeholder="Enter New Name" required> <br><br>
        <label for="update_email">Email: </label>
        <input type="email" name="email" placeholder="Enter New Email Address" required> <br><br>
        <label for="update_phone">Phone Number: </label>
        <input type="phone" name="phone" placeholder="Enter New Phone Number" required> <br><br>
        <label for="update_password">Password: </label>
        <input type="password" name="password" placeholder="Enter New Password" required> <br><br>
        <button type="submit" name="update">Update</button>

    </form>
</body>
</html>
