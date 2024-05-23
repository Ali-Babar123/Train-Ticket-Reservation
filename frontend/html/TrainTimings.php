<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/home.css" />
    <link rel="stylesheet" href="../Css/TrainTimings.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
    <a href="./Register.html"
      ><button class="button">Register</button></a>
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

            <section class="first-section">

            <form action="../../backend/bookingDetails/traindata/searchbytrain.php" method="post">
                <div class="searchtrain" style="margin: 30px">
                    <div class="heading">
                        <h1>Search By Train Name</h1>
                    </div>

                    <div class="contentCenter">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Train Name</label>
                            <select class="form-select" id="inputGroupSelect01" name="train">
                                <option selected>Choose Train</option>
                                <option value="pakistanexpress">Pakistan Express</option>
                                <option value="tezgam">Tez Gam</option>
                                <option value="islamabadexpress">Islamabad Express</option>
                                <option value="rawalpindiexpress">Rawalpindi Express</option>
                                <option value="raviexpress">Ravi Express</option>
                                <option value="shaheenpassenger">Shaheen Passenger</option>
                                <option value="shalimarexpress">Shalimar Express</option>
                            </select>
                        </div>
                        <div class="input-group mb-3 date-center">
                            <label for="date">Choose Date</label>
                            <input type="date" name="date" id="" />
                        </div>
                    </div>
                    <button type="submit" name="search" class="btn btn-primary btn-lg">Search</button>
                </div>
                </form>




                <form action="../../backend/bookingDetails/traindata/searchbysource.php" method="post">
                    <div class="searchlocation" style="margin: 30px">
                        <div class="heading">
                            <h1>Search By Location</h1>
                        </div>

                        <div class="contentCenter">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="fromSelect">From</label>
                                <select class="form-select" id="fromSelect" name="source">
                                    <option selected>Choose Source</option>
                                    <option value="lahore">Lahore</option>
                                    <option value="karachi">Karachi</option>
                                    <option value="sindh">Sindh</option>
                                    <option value="rawalpindi">Rawalpindi</option>
                                    <option value="multan">Multan</option>
                                    <option value="quetta">Quetta</option>
                                    <option value="sargodha">Sargodha</option>
                                    <option value="peshawar">Peshawar</option>
                                    <option value="sialkot">Sialkot</option>
                                    <option value="okara">Okara</option>
                                    <option value="gujarkhan">Gujar Khan</option>
                                    <option value="noshehra">Noshehra</option>
                                    <option value="mirpur">Mirpur</option>
                                    <option value="sindh">Sindh</option>
                                    <option value="larkana">Larkana</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="toSelect">To</label>
                                <select class="form-select" id="toSelect" name="destination">
                                    <option selected>Choose Destination</option>
                                    <option value="lahore">Lahore</option>
                                    <option value="karachi">Karachi</option>
                                    <option value="sindh">Sindh</option>
                                    <option value="rawalpindi">Rawalpindi</option>
                                    <option value="multan">Multan</option>
                                    <option value="quetta">Quetta</option>
                                    <option value="sargodha">Sargodha</option>
                                    <option value="peshawar">Peshawar</option>
                                    <option value="sialkot">Sialkot</option>
                                    <option value="okara">Okara</option>
                                    <option value="gujarkhan">Gujar Khan</option>
                                    <option value="noshehra">Noshehra</option>
                                    <option value="mirpur">Mirpur</option>
                                    <option value="sindh">Sindh</option>
                                    <option value="larkana">Larkana</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="search" class="btn btn-primary btn-lg">Search</button>
                    </div>
                </form>

            </section>

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