<!-- logout.php -->
<?php
session_start();
session_destroy();
header("Location: ../frontend/html/loggedinUser/logout.html");
exit();
?>
