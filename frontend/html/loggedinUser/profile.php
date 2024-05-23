<?php
    session_start(); 

    include '../../../backend/config.php';
    $loggedInUserMail = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ OPERATION</title>    
    <link rel="stylesheet" href="../../Css/home.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
    <link rel="stylesheet" href="./profile.css">
</head>

<body>

<div class="empty">
      <div class="main">
      <nav>
        <a href="./Home.php" class="logo">Railways</a>

        <div class="menu">
            <a href="../Home.php">Home</a>
            <a href="../TrainTimings.php">Train Timings</a>
            <a href="../BookingDetails.php">Booking Details</a>
            <a href="../About.php">About</a>
            <a href="../Contact.php">Contact</a>
          </div>
          
          <?php
if (!isset($_SESSION['email'])) {
    // Display the "Login" and "Register" buttons for non-logged-in users
    echo ('<div class="buttons">
    <a href="../Login.html"><button class="button">Login</button></a>
    <a href="../Register.html"><button class="button">Register</button></a>
    </div>');
} else {
    echo '<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./profile.php">Personal Details</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="../../../backend/logout.php">Logout</a></li>
          </ul>
        </li>';
}
?>

          <div class="menu-icon" onclick="toggleMenu">&#9776;</div>
      </nav>

    <?php
    $isAdmin = false; 
    $sqlRoleCheck = "SELECT role FROM users WHERE email = '$loggedInUserMail'";
    $resultRoleCheck = $conn_railway->query($sqlRoleCheck);

    if ($resultRoleCheck->num_rows > 0) {
        $rowRoleCheck = $resultRoleCheck->fetch_assoc();
        if ($rowRoleCheck["role"] == "admin") {
            $isAdmin = true;
        }
    }

    if ($isAdmin) {
        $sql = "SELECT * FROM users";
    } else {
        $sql = "SELECT * FROM users WHERE email = '$loggedInUserMail'";
    }
    ?>

<?php
            
    $loggedInUserMail = $_SESSION["email"];
    
        echo '<div class="center">
        <header>
        <h1>User Profile</h1>
        </header>
    
      <div class="container">
        <img class="profile-img" src="https://placekitten.com/150/150" alt="Profile Picture">';
?>

<?php

    $result = $conn_railway->query($sql);

    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["fname"] . "</h2>";
            echo '<p>Email: <input type="text" value="' . $row["email"] . '" readonly></p>';
            echo '<p>Phone: <input type="number" value="' . $row["phonenumber"] . '" readonly></p>';
            echo '<p>Gender: <input type="text" value="' . $row["gender"] . '" readonly></p>';
        }
    } else {
        echo "0 results";
    }

echo '<a href="../../../backend/read.php"><button class="btn btn-primary" >Show Profile Data</button></a>
<a href="../../../backend/update.php"><button class="btn btn-primary" >Edit Profile</button></a><span> </span><a href="../../../backend/bookingDetails/read.php"><button class="btn btn-primary" >Booking Details</button></a> ';
if ($isAdmin) {
  echo  '<a href="../../../backend/delete.php"><button class="btn btn-primary deletebtn" >Delete Registered Users</button></a>';
  echo  '<a href="./isAdmin.php"><button class="btn btn-primary deletebtn" style="margin: 10px">Add Train Record</button></a>';
};

    ?>
</div>

        <footer>
          <div class="footer-columns">
            <div class="footer-column">
            <h4>E-Ticket System</h4>
            <p>
            Introducing the E-Ticketing system and the Railways Online
                                Booking Reservation system for the convenience of its
                                customers.<br>
              Railways Online Booking Reservation system for the convenience of its customers.
            </p>
            </div>
            <div class="footer-column">
            <h4>Services</h4>
            <a href="#">Online Reservation</a><br />
            <a href="#">Fastest Service</a><br />
            <a href="#">Effort Free</a>
            </div>
            <div class="footer-column right-most-column">
            <h4>Contact</h4>
            <a href="#">WhatsApp<span> </span><img src="./pictures/whatsapp.png" alt="" /></a><br />
            <a href="#">Instagram <span></span><img src="./pictures/instagram.png" alt="" /></a><br />
            <a href="#">Facebook <span></span><img src="./pictures/facebook.png" alt="" /></a>
            </div>
          </div>
        </footer>
        
      </div>
    </div>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>
