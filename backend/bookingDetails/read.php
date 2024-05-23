        <?php
            session_start();
            include '../config.php'; // this file has database named "railway"
            $loggedInUserMail = $_SESSION["email"];
        ?>

        <?php
            include 'config.php'; //this file has database named "bookingdetails"
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
            <h2>User Data</h2>
            <?php
            $isAdmin = false;
            $sqlRoleCheck = "SELECT role FROM users WHERE email = '$loggedInUserMail'"; //checking from database railway
            $resultRoleCheck = $conn_railway->query($sqlRoleCheck);
            
            if ($resultRoleCheck->num_rows > 0) {
                $rowRoleCheck = $resultRoleCheck->fetch_assoc();
                // echo "User Role: " . $rowRoleCheck["role"];
                if ($rowRoleCheck["role"] == "admin") {
                    $isAdmin = true;
                }
            }

            if ($isAdmin) {
                $sql = "SELECT * FROM users";
            } else {
                $sql = "SELECT * FROM users WHERE email = '$loggedInUserMail'";
            }

            $result = $conn_booking->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Name</th><th>From</th><th>To</th><th>Train</th><th>Tickets</th><th>Date</th><th>Status</th><th>Role</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["startinglocation"] . "</td>";
                    echo "<td>" . $row["endinglocation"] . "</td>";
                    echo "<td>" . $row["train"] . "</td>";
                    echo "<td>" . $row["tickets"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "<td>" . $row["role"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            ?>
            <?php
        if ($isAdmin) {
            echo  '<a href="./deleterecord.php"><button class="btn btn-primary deletebtn" >Delete User Data</button></a>';
        } 
        ?>

        </body>

        </html>