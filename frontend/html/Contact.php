<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/home.css" />
    <link rel="stylesheet" href="../Css/contact.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
  </head>
  <body>
    <div class="empty">
      <div class="main">
        <nav>
          <a href="./Home.php" class="logo">Railways</a>

          <div class="menu">
            <a href="./Home.php">Home</a>
            <a href="./TrainTimings.php">Train Timings</a>
            <a href="./BookingDetails.php">Booking Details</a>
            <a href="./About.php">About</a>
            <a href="./Contact.php">Contact</a>
          </div>

          <?php
if (!isset($_SESSION['email'])) {
    // Display the "Login" and "Register" buttons for non-logged-in users
    echo ('<div class="buttons">
    <a href="./Login.html"><button class="button">Login</button></a>
    <a href="./Register.html"><button class="button">Register</button></a>
    </div>');
} else {
    echo '<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./loggedinUser/profile.php">Personal Details</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="../../backend/logout.php">Logout</a></li>
          </ul>
        </li>';
}
?>

          <div class="menu-icon" onclick="toggleMenu">&#9776;</div>
        </nav>

        <header>
    <h1>Contact Us</h1>
  </header>

  <div class="container">
    <form action="#" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit">Submit</button>
    </form>
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

    <script>
      function toggleMenu() {
        const menu = document.querySelector(".menu");
        menu.classList.toggle("show");
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
  </body>
</html>
