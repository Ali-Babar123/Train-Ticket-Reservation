<?php
    session_start();
    include '../../../backend/bookingDetails/config.php';
    $loggedInUserMail = $_SESSION["email"];
    // echo("$loggedInUserMail");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$isAdmin = false; // Default is not admin
$sqlRoleCheck = "SELECT role FROM users WHERE email = '$loggedInUserMail'";
    $resultRoleCheck = $conn->query($sqlRoleCheck);

    if ($resultRoleCheck->num_rows > 0) {
        $rowRoleCheck = $resultRoleCheck->fetch_assoc();
        // echo "Role from Database: " . $rowRoleCheck["role"]; // Add this line to check the role
        if ($rowRoleCheck["role"] == "admin") {
            $isAdmin = true;
        }
    }
    

echo('<div style="text-align:center;">');
echo('<h2>Your Details are added</h2>');
echo('<br>');
echo('<a href="../../../backend/bookingDetails/read.php">Check Details</a>');
echo('</div>');

if ($isAdmin) {
    echo('<div style="text-align:center;">');
    echo '<a href="../../../backend/bookingDetails/deleterecord.php">Delete User Details</a>';
}
?>
    
</body>
</html>