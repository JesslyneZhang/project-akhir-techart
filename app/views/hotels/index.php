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
          <li><a href="index.php?page=about_us">About Us</a></li>
          <li><a href="index.php?page=contact_us">Contact Us</a></li>
          <!-- kalau sudah pakai routing via index.php?page=hotels, ubah href ini -->
          <li><a href="index.php?page=hotels" class="active">Hotel</a></li>
        </ul>

        <a href="index.php?page=login" class="btn">Log In</a>

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
          <!-- kalau mau sekalian filter Villa:
          <option value="Villa">Villa</option>
          -->
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
        <?php if (!empty($hotels)): ?>
          <?php foreach ($hotels as $hotel): ?>
            <?php
              // safety: pastikan key sesuai tabel: id, name, city, region, type, price_per_night, rating, image
              $region = htmlspecialchars($hotel['region'] ?? '');
              $type   = htmlspecialchars($hotel['type'] ?? '');
              $price  = (int)($hotel['price_per_night'] ?? 0);
              $name   = htmlspecialchars($hotel['name'] ?? '');
              $city   = htmlspecialchars($hotel['city'] ?? '');
              $rating = (float)($hotel['rating'] ?? 0);
              $image  = htmlspecialchars($hotel['image'] ?? '');
            ?>
            <div class="hotel-card"
                 data-location="<?= $region ?>"
                 data-type="<?= $type ?>"
                 data-price="<?= $price ?>">
              <img src="<?= $image ?>" alt="<?= $name ?>" />
              <div class="hotel-info">
                <div class="hotel-rating">
                  <?php
                    // render bintang sesuai rating: full + half
                    $fullStars = floor($rating);
                    $hasHalf   = ($rating - $fullStars) >= 0.5;

                    for ($i = 0; $i < $fullStars; $i++) {
                      echo '<i class="bx bxs-star"></i>';
                    }
                    if ($hasHalf) {
                      echo '<i class="bx bxs-star-half"></i>';
                    }
                  ?>
                  <span><?= number_format($rating, 1) ?></span>
                </div>
                <h3><?= $name ?></h3>
                <p class="hotel-location">
                  <i class="bx bx-map"></i>
                  <?= $city . ($region ? ', ' . $region : '') ?>
                </p>
                <p class="hotel-price">
                  IDR <?= number_format($price, 0, ',', '.') ?> / night
                </p>
                <!-- detail bisa diarahkan ke route MVC detail hotel -->
                <a href="index.php?page=hotel_detail&id=<?= (int)$hotel['id'] ?>" class="btn-detail">Detail</a>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p style="padding: 16px;">Belum ada data hotel.</p>
        <?php endif; ?>
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
