<?php 
    include 'config.php'; 
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $id = $_POST["id"];

    // Check if the record with the given ID exists
    $checkSql = "SELECT * FROM users WHERE id = $id";
    $checkResult = $conn_booking->query($checkSql);

    if ($checkResult->num_rows > 0) {
        // Record exists, proceed with deletion
        $deleteSql = "DELETE FROM users WHERE id = $id";

        if ($conn_booking->query($deleteSql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn_booking->error;
        }
    } else {
        echo "Record with ID $id does not exist.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE </title>
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
            background-color: #d9534f;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c9302c;
        }
    </style>
<body>
    <form method="post" action="">
        <!-- Delete Operation -->
        <h2>Delete User</h2>
        <label for="delete_id">ID:</label>
        <input type="number" name="id" required> <br> <br>
        <button type="submit" name="delete">Delete</button>
    </form>
</body>
</html>
