<?php
    session_start(); // Add this line to start the session

    include 'config.php';
    $loggedInUserMail = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ OPERATION</title>
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

        th, td {
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
    <h2>User Data</h2>
    <?php
    $isAdmin = false; // Default is not admin
    $sqlRoleCheck = "SELECT role FROM users WHERE email = '$loggedInUserMail'";
    $resultRoleCheck = $conn_railway->query($sqlRoleCheck);

    if ($resultRoleCheck->num_rows > 0) {
        $rowRoleCheck = $resultRoleCheck->fetch_assoc();
        if ($rowRoleCheck["role"] == "admin") {
            $isAdmin = true;
        }
    }

    // Fetch data based on the role condition
    if ($isAdmin) {
        // If the user is an admin, display data for all users
        $sql = "SELECT * FROM users";
    } else {
        // If the user is not an admin, display data only for the logged-in user
        $sql = "SELECT * FROM users WHERE email = '$loggedInUserMail'";
    }

    $result = $conn_railway->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Role</th><th>Email</th><th>Phone Number</th><th>Gender</th><th>Password</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["fname"] . "</td>";
            echo "<td>" . $row["lname"] . "</td>";
            echo "<td>" . $row["role"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["phonenumber"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
</body>
</html>
