<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/home.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
    <link rel="stylesheet" href="../Css/about.css">

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

    <section class="summary">
    <div class="heading">
      <h2>About Us:</h2>
    </div>
    <div class="paragraphs">
      <p>
        Pakistan Railways provide an important mode of Transportation in
        the farthest corners of the country and brings them closer for
        Business, sightseeing, pilgrimage and education. It has been a
        great integrating force and forms the life line of the country by
        catering to its needs for large scale movement of people and
        freight.
      </p>
      <p>
        The possibility of Karachi as a sea port was first noticed in the
        mid of 19th century and Sir Henry Edward Frere who was appointed
        Commissioner of Sindh after its annexation with Bombay in 1847
        sought permission from Lord Dalhousie to begin survey of sea port.
        He also initiated the survey for the Railway line in 1858. It was
        proposed that a railway line from Karachi City to Kotri, steam
        navigation up the Indus/Chenab up to Multan and from there another
        railway line to Lahore and beyond be constructed.
      </p>
      <p>
        It was on 13th May,1861 that the first railway line was opened for
        public traffic between Karachi City and Kotri, a distance of 105
        miles. The line between Karachi City and Kiamari was opened on
        16.6.1889. By 1897 the line from Kiamari to Kotri was doubled.
      </p>
      <p>
        The railway line from Peshawar to Karachi closely follows
        Alexander’s line of march through the Hindu Kush to the sea.
        Different sections on the existing main line from Peshawar to Lahore
        and Multan and branch lines were constructed in the last quarter
        of the 19th century and early years of the 20th century.
      </p>
      <p>
        The 4 sections i.e. Scinde Railways, Indian Flotilla Company,
        Punjab Railway, and Delhi Railways working in a single company were
        later on amalgamated into Scinde, Punjab & Delhi Railways Company
        and were purchased by the Secretary of State for India in 1885 and
        in January 1886 it was named North Western State Railways which
        was later on renamed as North Western Railways.
      </p>
      <p>
        At the time of partition, North Western Railways' 1847 route mile
        was transferred to India leaving route miles 5048 to Pakistan. In
        1954 The railway line was extended to Mardan and Charsada section
        and in 1956 Jacababad-Kashmore 2’-6’’ line was converted into
        broad gauge. Kot Adu-Kashmore line was constructed between 1969 to
        1973 providing an alternate route from Karachi to upcountry.
      </p>
    </div>
  </section>

        <footer>
          <div class="footer-columns">
            <div class="footer-column">
            <h4>E-Ticket System</h4>
            <p>
            Introducing the E-Ticketing system and the Railways Online Booking Reservation system for the convenience of its customers.<br>
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
