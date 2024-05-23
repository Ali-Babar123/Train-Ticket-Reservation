<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- login.php -->
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

session_start();
$conn_railway = new mysqli($servername, $username, $password, $dbname);

if ($conn_railway->connect_error) {
    die("Connection failed: " . $conn_railway->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn_railway->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: ../frontend/html/loggedinUser/successLogin.php");
        exit();
    } else {
        echo "Login failed. Please check your credentials.";
        echo "Error: " . $stmt->error; // Check for any SQL errors
        exit();
    }

    $stmt->close();
}

$conn_railway->close();
?>

</body>
</html>
