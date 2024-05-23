<?php 
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $phone = $_POST["phonenumber"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    $checkSql = "SELECT * FROM users WHERE email = '$email'";
    $checkResult = $conn_railway->query($checkSql);

    if ($checkResult->num_rows > 0) {
        echo "Error: Record with email '$email' already exists.";
    } else {
        $sql = "INSERT INTO users (fname, lname, email, role, phonenumber, gender, password) VALUES ('$fname', '$lname', '$email', '$role', '$phone', '$gender', '$password')";

        if ($conn_railway->query($sql) === TRUE) {
            header("Location: ../frontend/html/loggedinUser/successRegister.html?registration_success=1");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn_railway->error;
        }
    }
}
?>
