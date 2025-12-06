<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Hotel | BuddiesHotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="public/assets/css/hotel.css" />
    <link rel="stylesheet" href="public/assets/css/style.css" />
  </head>
  <body>
    <!-- ===== NAVBAR ===== -->
    <header>
      <div class="nav container">
        <a href="index.php" class="logo"> <i class="bx bx-home-alt"></i>BuddiesHotel </a>

        <input type="checkbox" id="menu" />
        <label for="menu"><i class="bx bx-menu" id="menu-icon"></i></label>

        <ul class="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
          <li><a href="hotel.php" class="active">Hotel</a></li>
        </ul>

        <a href="login.php" class="btn">Log In</a>
      </div>
    </header>

    <!-- ================= HERO ================= -->
    <section class="contact-page-hero">
      <div class="breadcrumb-box">
        <h1>Our Hotel</h1>
        <div class="breadcrumb">
          <a href="index.php">Home</a>
          <i class="bx bx-chevron-right"></i>
          <span>Hotel</span>
        </div>
      </div>
    </section>

    <!-- ================= FILTER ================= -->
    <div class="hotel-filter-wrap">
      <div class="hotel-filter">
        <select id="filterLocation">
          <option value="">All Location</option>
          <option value="Bali">Bali</option>
          <option value="Jakarta">Jakarta</option>
          <option value="Yogyakarta">Yogyakarta</option>
        </select>

        <select id="filterType">
          <option value="">All Type</option>
          <option value="Resort">Resort</option>
          <option value="Hotel">Hotel</option>
          <option value="Hostel">Hostel</option>
        </select>

        <select id="filterPrice">
          <option value="">All Price</option>
          <option value="1000000">≤ 1.000.000</option>
          <option value="2000000">≤ 2.000.000</option>
          <option value="3000000">≤ 3.000.000</option>
        </select>

        <button type="button" id="btnFilter">Filter</button>
      </div>
    </div>

    <!-- ================= HOTEL GRID ================= -->
    <div class="hotel-wrapper">
      <div class="hotel-grid" id="hotelGrid">
        <!-- CARD 1 -->
        <div class="hotel-card" data-location="Bali" data-type="Resort" data-price="1200000">
          <img src="public/assets/img/hotel1.jpg" alt="" />
          <div class="hotel-info">
            <div class="hotel-rating">
              <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star-half"></i>
              <span>4.8</span>
            </div>
            <h3>Luxe Ocean Resort</h3>
            <p class="hotel-location"><i class="bx bx-map"></i> Bali, Indonesia</p>
            <p class="hotel-price">IDR 1.200.000 / night</p>
            <a href="detail1.php" class="btn-detail">Detail</a>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="hotel-card" data-location="Jakarta" data-type="Hotel" data-price="850000">
          <img src="public/assets/img/hotel2.jpg" alt="" />
          <div class="hotel-info">
            <div class="hotel-rating">
              <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i>
              <span>4.0</span>
            </div>
            <h3>Grand Central Hotel</h3>
            <p class="hotel-location"><i class="bx bx-map"></i> Jakarta, Indonesia</p>
            <p class="hotel-price">IDR 850.000 / night</p>
            <a href="detail2.php" class="btn-detail">Detail</a>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="hotel-card" data-location="Bandung" data-type="Villa" data-price="950000">
          <img src="public/assets/img/hotel3.jpg" alt="" />
          <div class="hotel-info">
            <div class="hotel-rating">
              <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star-half"></i>
              <span>3.6</span>
            </div>
            <h3>Mountain View Villa</h3>
            <p class="hotel-location"><i class="bx bx-map"></i> Bandung, Indonesia</p>
            <p class="hotel-price">IDR 950.000 / night</p>
            <a href="detail3.php" class="btn-detail">Detail</a>
          </div>
        </div>

        <!-- CARD 4 -->
        <div class="hotel-card" data-location="Lombok" data-type="Resort" data-price="1400000">
          <img src="public/assets/img/hotel4.jpg" alt="" />
          <div class="hotel-info">
            <div class="hotel-rating">
              <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i>
              <span>5.0</span>
            </div>
            <h3>Emerald Beach Resort</h3>
            <p class="hotel-location"><i class="bx bx-map"></i> Lombok, Indonesia</p>
            <p class="hotel-price">IDR 1.400.000 / night</p>
            <a href="detail4.php" class="btn-detail">Detail</a>
          </div>
        </div>

        <!-- CARD 5 -->
        <div class="hotel-card" data-location="Bali" data-type="Villa" data-price="1100000">
          <img src="public/assets/img/hotel5.jpg" alt="" />
          <div class="hotel-info">
            <div class="hotel-rating">
              <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i>
              <span>3.0</span>
            </div>
            <h3>Sunset Private Villa</h3>
            <p class="hotel-location"><i class="bx bx-map"></i> Bali, Indonesia</p>
            <p class="hotel-price">IDR 1.100.000 / night</p>
            <a href="detail5.php" class="btn-detail">Detail</a>
          </div>
        </div>

        <!-- CARD 6 -->
        <div class="hotel-card" data-location="Surabaya" data-type="Hotel" data-price="650000">
          <img src="public/assets/img/hotel6.jpg" alt="" />
          <div class="hotel-info">
            <div class="hotel-rating">
              <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star-half"></i>
              <span>2.5</span>
            </div>
            <h3>Urban Stay Hotel</h3>
            <p class="hotel-location"><i class="bx bx-map"></i> Surabaya, Indonesia</p>
            <p class="hotel-price">IDR 650.000 / night</p>
            <a href="detail6.php" class="btn-detail">Detail</a>
          </div>
        </div>

        <!-- CARD 7 -->
        <div class="hotel-card" data-location="Bali" data-type="Resort" data-price="1800000">
          <img src="public/assets/img/hotel7.jpg" alt="" />
          <div class="hotel-info">
            <div class="hotel-rating">
              <i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i><i class="bx bxs-star"></i>
              <span>4.2</span>
            </div>
            <h3>Royal Palm Resort</h3>
            <p class="hotel-location"><i class="bx bx-map"></i> Bali, Indonesia</p>
            <p class="hotel-price">IDR 1.800.000 / night</p>
            <a href="detail7.php" class="btn-detail">Detail</a>
          </div>
        </div>

        <!-- CARD 8 -->
        <div class="hotel-card" data-location="Yogyakarta" data-type="Hotel" data-price="720000">
          <img src="public/assets/img/hotel8.jpg" alt="" />
          <div class="hotel-info">
            <div class="hotel-rating">
              <i class="bx bxs-star"></i><i class="bx bxs-star"></i>
              <span>2.0</span>
            </div>
            <h3>Culture Stay Hotel</h3>
            <p class="hotel-location"><i class="bx bx-map"></i> Yogyakarta</p>
            <p class="hotel-price">IDR 720.000 / night</p>
            <a href="detail8.php" class="btn-detail">Detail</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ================= FOOTER ================= -->
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
      <p>© BuddiesHotel All Right Reserved</p>
    </div>

    <!-- JS -->
    <script src="public/assets/js/script.js"></script>
    <script src="public/assets/js/hotel.js"></script>
  </body>
</html>
