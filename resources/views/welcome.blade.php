<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TERA VEHICLE TRACKING SYSTEM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/team/about.png" rel="icon">
   <link href="assets1/img/about.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="#" class="logo me-auto"><img src="./images/logo.png" alt="" class="img-fluid" style="height:14rem;width:5rem"></a>

      <nav id="navbar" class="navbar text-white" style="background-color:#2b547e00">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="auth/login">Login</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center"
style="background-image: url('./images/bgbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      <h1>Tera Vehicle Tracking System</h1>
      <div class="d-flex justify-content-center justify-content-lg-start">
        <a href="auth/login" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="100">
      <!-- Slideshow of Images -->
      <div class="slideshow-container">
        <div class="slide fade">
          <img src="./images/picha1.jpg" class="img-fluid animated" alt="Hero Image 1">
        </div>
        <div class="slide fade">
          <img src="./images/picha2.jpg" class="img-fluid animated" alt="Hero Image 2">
        </div>
        <div class="slide fade">
          <img src="./images/picha3.jpg" class="img-fluid animated" alt="Hero Image 3">
        </div>
          <div class="slide fade">
            <img src="./images/picha4.jpg" class="img-fluid animated" alt="Hero Image 4">
          </div>
          <div class="slide fade">
            <img src="./images/picha5.jpg" class="img-fluid animated" alt="Hero Image 5">
        </div>
        <div class="slide fade">
          <img src="./images/picha6.jpg" class="img-fluid animated" alt="Hero Image 6">
      </div>
      <div class="slide fade">
        <img src="./images/picha7.jpg" class="img-fluid animated" alt="Hero Image 7">
    </div>
    <div class="slide fade">
      <img src="./images/picha8.jpg" class="img-fluid animated" alt="Hero Image 8">
        <!-- Add more images as needed -->
      </div>
    </div>
  </div>
</div>

</section><!-- End Hero -->

<!-- Add the following CSS and JavaScript -->
<style>
/* Style for the slideshow container */
.slideshow-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

/* Hide all images by default */
.slide {
  display: none;
  width: 100%;
  height: 100%;
}

/* Fade-in animation */
.fade {
  animation: fadeIn 2s ease-in-out;
}

/* Keyframes for fade-in effect */
@keyframes fadeIn {
  0% { opacity: 0; }
  50% { opacity: 1; }
  100% { opacity: 0; }
}
</style>

<script>
let slideIndex = 0;
showSlides();

// Function to change slides
function showSlides() {
  let slides = document.getElementsByClassName("slide");

  // Hide all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Show the current slide
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  slides[slideIndex - 1].style.display = "block";

  // Change slide every 3 seconds
  setTimeout(showSlides, 3000);
}
</script>


  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about" style="margin-top:40px">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             Vehicle Tracking system is a system, with a goal of tracking the GPS location of vehicles. Not only does VTS track the real-time location of vehicles but has several accessories that aid in alerting the responsible municipalities of the following:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>1.The real-time location of the vehicle.</li>
              <li><i class="ri-check-double-line"></i> 2.The moment the vehicle overspeeds and by how much.</li>
              <li><i class="ri-check-double-line"></i> 3.Alert for drivers in distress.</li>
                <li><i class="ri-check-double-line"></i> 4.The identity of the driver driving the vehicle.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <a href="#" class="btn-learn-more" style="margin-top:40px">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>More info about VTS system</strong></h3>
              <p>
                In today’s digital age, tracking systems have become an essential feature for enhancing user experience and operational efficiency. By integrating GPS and location services, an apps can offer real-time tracking of assets, deliveries, or personal movements.
              </p>
            </div>

            <div class="accordion-list">
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/home-img.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Explore our service here.</p>
        </div>

        <div class="row">
          <div class="col-xl-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4><a href="">Real-Time Location Tracking</a></h4>
              <p><i class="bi bi-list"></i>It Provides live updates of a vehicle's current location on a map.</p>
              <p><i class="bi bi-list"></i>It Allows fleet managers or vehicle owners to see where their vehicles are at any given time.</p>
            </div>
          </div>

          <div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4><a href="">Driver Behavior Monitoring</a></h4>
         <p><i class="bi bi-list"></i>Tracks and analyzes driving habits such as speeding, harsh braking, and rapid acceleration.</p>
            <p><i class="bi bi-list"></i>Promotes safer driving practices and helps in coaching drivers to improve their performance.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>App Pricing</h2>
          <p>Explore our pricing plans.</p>
        </div>

        <div class="row">


          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
             <h4>TSH 380,000</h4>
           <h3>For client Initial installation.</h3>
              <p>This cost is the price for the device</p>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

           <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
             <h4>TSH 300,000</h4>
              <h3>MEANING</h3>
              <p>is the price for the device</p>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
             <h4>TSH 80,000</h4>
              <p>is the service charge for 4 months from the initial installation @20,000 Tsh per month</p>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Explore our contact.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Mbezi beach Africana, Plot No. 2283, Block H Tarangire Street, Africana Drive, P.O. Box 31257, Dar es Salaam, Tanzania.</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Please feel free to send us an email info@teratech.co.tz</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>Give us a call 255 22 2701612,+255713899309.</p>
              </div>

            <p  style="margin-top:90px;font-size:15px"><a href="https://www.tanzapages.com/company/15563/Tera_Technologies_and_Engineering_Limited">Click to view location here</a><p>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Subscribe</h4>
            <p>Submit subscription here</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class=" col-md-4 footer-contact">
            <h3>Teratech</h3>
            <p>
             Mbezi beach Africana<br> Plot No. 2283, Block H Tarangire Street,<br> Africana Drive, P.O. Box 31257, Dar es Salaam, Tanzania.<br>
            </p>
          </div>

          <div class=" col-md-4 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>



          <div class=" col-md-4 footer-links">
            <h4>Social networks</h4>
            <p>Explore our social networks</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/www.teratech.co.tz?ref=aymt_homepage_panel" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/teratech_and_engineering_ltd/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/company/tera-technologies-and-engineering-limited/?originalSubdomain=tz" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="credits">
       Copyright © 2024 Teratech. All Rights Reserved. Copyright by teratech.co.tz.
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/aos/aos.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets1/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>
