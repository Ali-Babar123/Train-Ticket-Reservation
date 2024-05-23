<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: failed.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Railway Resevation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mina:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../allCSS.css">
    <link rel="stylesheet" href="../../Css/home.css" />
  </head>
  <body>
    <div class="empty">
      <div class="main">
        <nav>
          <div class="left"><a href="./home.html">Logo</a></div>
          <div class="right">
            <ul>
              <li><a href="./loggedinHome.php"> Home </a></li>
              <li><a href="./bookingDetails.php"> Book Ticket </a></li>
              <li><a href=".trainTimings.html"> Train Timings </a></li>
              <li><a href="./about.html"> About Us </a></li>
              <li><a href="./contact.html"> Contact Us </a></li>
              <li><a href="./profile.html"> User Details </a></li>
            </ul>
          </div>
          <div class="right-most">
            <button><a href="./profile.html"> Profile </a></button>
          </div>
        </nav>

        <section class="sec-1">
          <h1 class="title">
            Pakistan Railway eTicket Online Railway Ticket Booking
          </h1>
        </section>

        <section class="middle-sec">
          <div class="left-desc">
            Introducing the E-Ticketing system and the Railways Online Booking
            Reservation system for the convenience of its customers.
          </div>
          <div class="right-carou">
            <div
              id="carouselExampleIndicators"
              class="carousel slide carousel-fade"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>
              <div class="carousel-inner">
                <div
                  class="carousel-item active carousel-fade"
                  data-bs-interval="5000"
                >
                  <img
                    src="https://source.unsplash.com/1600x900/?travel,train"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div
                  class="carousel-item carousel-fade"
                  data-bs-interval="5000"
                >
                  <img
                    src="https://source.unsplash.com/1600x900/?travel,nature"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div
                  class="carousel-item carousel-fade"
                  data-bs-interval="5000"
                >
                  <img
                    src="https://source.unsplash.com/1600x900/?train,travel"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>

        <section class="third-sec">
          <button type="button" class="btn btn-primary btn-lg">
            <a href="./bookingDetails.php">Book Your Ticket Now</a>
          </button>
        </section>

        <footer>
          <div class="left-foot">
            <h4>E-Ticket System</h4>
            <p>
            Introducing the E-Ticketing system and the Railways Online
                                Booking Reservation system for the convenience of its
                                customers.<br>
              Railways Online Booking Reservation system for the convenience of its customers.
            </p>
          </div>
          <div class="mid-foot">
            <h4>Services</h4>
            <a href="#">Online Reservation</a><br />
            <a href="#">Fastest Service</a><br />
            <a href="#">Effort Free</a>
          </div>
          <div class="right-foot">
            <h4>Contact</h4>
            <a href="#">WhatsApp<span> </span><img src="./pictures/whatsapp.png" alt="" /></a><br />
            <a href="#">Instagram <span></span><img src="./pictures/instagram.png" alt="" /></a><br />
            <a href="#">Facebook <span></span><img src="./pictures/facebook.png" alt="" /></a>
          </div>
        </footer>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
