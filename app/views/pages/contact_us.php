<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - BuddiesHotel</title>

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="public/assets/css/contact.css" />
    <link rel="stylesheet" href="public/assets/css/style.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <header>
      <div class="nav container">
        <a href="index.php?page=home" class="logo">
          <i class="bx bx-home-alt"></i>BuddiesHotel
        </a>

        <input type="checkbox" id="menu" />
        <label for="menu"><i class="bx bx-menu" id="menu-icon"></i></label>

        <ul class="navbar">
          <li><a href="index.php?page=home">Home</a></li>
          <li><a href="index.php?page=about_us">About Us</a></li>
          <li><a href="index.php?page=contact_us" class="active">Contact Us</a></li>
          <li><a href="index.php?page=hotels">Hotel</a></li>
        </ul>

        <a href="index.php?page=login" class="btn">Log In</a>
      </div>
    </header>

    <!-- HERO -->
    <section class="contact-page-hero">
      <div class="breadcrumb-box">
        <h1>Contact Us</h1>
        <div class="breadcrumb">
          <a href="index.php?page=home">Home</a>
          <i class="bx bx-chevron-right"></i>
          <span>Contact</span>
        </div>
      </div>
    </section>

    <!-- CONTACT PAGE CONTAINER -->
    <section class="contact-container">
      <!-- LEFT SIDE - CONTACT INFO -->
      <div class="contact-info">
        <h2>Get in Touch</h2>
        <p class="subtitle">Sociis natoque penatibus et magnis dis parturient montes.</p>

        <div class="info-item">
          <i class="bx bx-map"></i>
          <div>
            <h4>Head Office</h4>
            <p>Jl. Raya Ubud, Gianyar, Bali</p>
          </div>
        </div>

        <div class="info-item">
          <i class="bx bx-envelope"></i>
          <div>
            <h4>Email Us</h4>
            <p>info@buddieshotel.com</p>
          </div>
        </div>

        <div class="info-item">
          <i class="bx bx-phone"></i>
          <div>
            <h4>Call Us</h4>
            <p>+62 812 3456 7890</p>
          </div>
        </div>

        <div class="social-icons">
          <a><i class="bx bxl-facebook"></i></a>
          <a><i class="bx bxl-instagram"></i></a>
          <a><i class="bx bxl-twitter"></i></a>
          <a><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

      <!-- RIGHT SIDE - CONTACT FORM -->
      <div class="contact-form">
        <h2>Send us a message</h2>

        <form id="contactForm">
          <div class="form-row">
            <input type="text" placeholder="Name" required />
            <input type="text" placeholder="Company" />
          </div>

          <div class="form-row">
            <input type="tel" placeholder="Phone" required />
            <input type="email" placeholder="Email" required />
          </div>

          <input type="text" placeholder="Subject" required />

          <textarea placeholder="Message" required></textarea>

          <button type="submit" class="btn-send">Send</button>
        </form>
      </div>
    </section>

    <!-- MAP -->
    <section class="map-section">
      <div class="map-frame">
        <iframe
          src="https://www.google.com/maps?q=Ubud,Bali&output=embed"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <!-- FOOTER -->
    <section class="footer">
      <div class="footer-container container">
        <h2>BuddiesHotel</h2>
        <div class="footer-box">
          <h3>Quick Links</h3>
          <a href="#">About Us</a>
          <a href="#">Hotels</a>
          <a href="#">Contact</a>
        </div>
        <div class="footer-box">
          <h3>Popular Areas</h3>
          <a href="#">Seminyak</a>
          <a href="#">Ubud</a>
          <a href="#">Canggu</a>
          <a href="#">Nusa Dua</a>
        </div>
        <div class="footer-box">
          <h3>Contact</h3>
          <a href="#">+62 361 123 4567</a>
          <a href="#">info@buddieshotel.com</a>
          <div class="social">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
      </div>
    </section>

    <div class="copyright">
      <p>&#169; BuddiesHotel All Right Reserved</p>
    </div>

    <!-- JS -->
    <script src="public/assets/js/contact.js"></script>
  </body>
</html>
