<!-- main_page.php -->
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['email']; ?>!</h1>

    <center>
      <h2>You are now Logged In!</h2>
      <p>You will be redirected to home page in 2 seconds</p>
    </center>
    <script>
      setTimeout(function () {
        window.location.href = "../Home.php";
      }, 2000);
    </script>
</body>
</html>
