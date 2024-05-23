<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../Css/home.css" />
    <link rel="stylesheet" href="./isAdmin.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
    <a href="./Login.html"><button class="button">Login</button></a>
    <a href="./Register.html"
      ><button class="button">Register</button></a>
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

            <div class="heading">
                <h1>Add Train Data</h1>
            </div>

            <div class="register">
                <form method="post" action="../../../backend/bookingDetails/traindata/trainrecord.php">
                    <div>
                        <label for="name">*Train Name: </label>
                        <input type="text" placeholder="Enter Train Name" required name="name" id="name" />

                        <label for="source">*Source: </label>
                        <input type="text" placeholder="Enter Source" required name="source" id="source" />
                    </div>

                    <div>
                        <label for="destination">*Destination:</label>
                        <input type="text" id="destination" name="destination" required />

                        <label for="date">*Date: </label>
                        <input type="date" required name="date" id="date" />

                        <label for="time">Select a time:</label>
                        <input type="time" id="time" name="time" pattern="[0-9]{2}:[0-9]{2}" required>
                    </div>

                    <input type="submit" name="submit" value="Register" id="" style="margin-top: 10px" />

                    <!-- <p>Already Have an Account? <a href="./login.html">Login</a></p> -->
                </form>
                <a href="../../../backend/bookingDetails/traindata/read.php"><button>View Train Data</button></a>
                <a href="../../../backend/bookingDetails/traindata/delete.php"><button>Delete Train Record</button></a>
            </div>

            <footer>
                <div class="footer-columns">
                    <div class="footer-column">
                        <h4>E-Ticket System</h4>
                        <p>
                        Introducing the E-Ticketing system and the Railways Online
                                Booking Reservation system for the convenience of its
                                customers.<br />
                            Railways Online Booking Reservation system for the convenience
                            of its customers.
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

    <script>
    function toggleMenu() {
        const menu = document.querySelector(".menu");
        menu.classList.toggle("show");
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>