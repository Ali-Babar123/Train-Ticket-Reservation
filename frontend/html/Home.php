<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/home.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mina:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
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

            <div class="allcontent">
                <section class="first-section">
                    <div class="heading">
                        <h1 class="title">
                            Pakistan Railway eTicket Online Railway Ticket Booking
                        </h1>
                    </div>
                    <div class="center-content">
                        <div class="leftside">
                            <p>
                                Introducing the E-Ticketing system and the Railways Online
                                Booking Reservation system for the convenience of its
                                customers.
                            </p>
                        </div>
                        <div class="rightside">
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="3000">
                                        <img src="./pictures/trainimg1.jpg" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="./pictures/trainimg2.jpg" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./pictures/trainimg3.jpg" class="d-block w-100" alt="..." />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./pictures/trainimg4.jpg" class="d-block w-100" alt="..." />
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="second-section">
                    <button type="button" class="btn btn-primary btn-lg">
                        <a href="./bookingDetails.php">Book Your Ticket Now</a>
                    </button>
                </section>

                <section class="third-section">
                    <div class="head">
                        <h2>Popular Destinations</h2>
                    </div>
                    <div class="card-container">
                        <div class="card">
                            <a href="#">
                                <img src="./pictures/Lahore.jpg" alt="Card 1" />
                            </a>
                            <span>Lahore</span>
                        </div>
                        <div class="card">
                            <a href="#"> <img src="./pictures/islamabad.jpg" alt="Card 2" /> </a><br />
                            <span>Islamabad</span>
                        </div>
                        <div class="card">
                            <a href="#"> <img src="./pictures/karachi.png" alt="Card 3" /> </a><br />
                            <span>Karachi</span>
                        </div>
                        <div class="card">
                            <a href="#">
                                <img src="./pictures/peshawar.jpg" alt="Card 4" />
                            </a>
                            <span>Peshawar</span>
                        </div>
                    </div>
                </section>

                <section class="fifth-section">
                    <div class="head">
                        <h2>Popular Stations</h2>
                    </div>
                    <div class="custom-container">
                        <div class="custom-card">
                            <a href="#">
                                <img src="./pictures/pindi-station.jpg" alt="Custom Card 1">
                            </a>
                            <span><br>
                                Rawalpindi
                            </span>
                        </div>
                        <div class="custom-card">
                            <a href="#">
                                <img src="./pictures/lahore-station.jpg" alt="Custom Card 2">
                            </a>
                            <span>Lahore</span>
                        </div>
                        <div class="custom-card">
                            <a href="#">
                                <img src="./pictures/karachi-station.jpg" alt="Custom Card 2">
                            </a>
                            <span>Karachi</span>
                        </div>
                    </div>
                </section>

                <section class="fourth-section">
                    <div class="head">
                        <h2>Popular Train Classes</h2>
                    </div>
                    <div class="custom-container">
                        <div class="custom-card">
                            <a href="#">
                                <img src="./pictures/businessClass.jpg" alt="Custom Card 1">
                            </a>
                            <span><br>
                                business Class
                            </span>
                        </div>
                        <div class="custom-card">
                            <a href="#">
                                <img src="./pictures/1stClass.jpg" alt="Custom Card 2">
                            </a>
                            <span>First Class</span>
                        </div>
                        <div class="custom-card">
                            <a href="#">
                                <img src="./pictures/economyClass.jpeg" alt="Custom Card 2">
                            </a>
                            <span>Economy Class</span>
                        </div>
                    </div>
                </section>

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