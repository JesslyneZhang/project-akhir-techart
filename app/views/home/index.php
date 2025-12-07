<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuddiesHotel</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="public/assets/css/style.css" />
  </head>
  <body>
    <!-- Navbar -->
    <header>
      <div class="nav container">
        <!-- Logo -->
        <a href="index.php?page=home" class="logo"><i class="bx bx-home-alt"></i>BuddiesHotel</a>
        <!-- Menu Icon -->
        <input type="checkbox" id="menu" />
        <label for="menu"><i class="bx bx-menu" id="menu-icon"></i></label>
        <!-- Nav List -->
        <ul class="navbar">
          <li><a href="index.php?page=home">Home</a></li>
          <li><a href="index.php?page=about_us">About Us</a></li>
        <li><a href="index.php?page=contact_us">Contact Us</a></li>
          <li><a href="index.php?page=hotels">Hotel</a></li>
        </ul>
        <!-- Log In Button -->
       <a href="index.php?page=login" class="btn">Log In</a>

      </div>
    </header>

    <!-- Home -->
    <section class="home container" id="home">
      <div class="home-text">
        <h1>Discover Your Perfect <br />Hotel Experience <br />In Bali.</h1>
        <a href="booking.php" class="btn">Book Now</a>
      </div>
    </section>

    <!-- About -->
    <section class="about container" id="about">
      <div class="about-img">
        <img src="public/assets/img/about.jpg" alt="" />
      </div>
      <div class="about-text">
        <span>About Us</span>
        <h2>We Provide The Best <br />Hotel Experience In Bali!</h2>
        <p>
          BuddiesHotel is your trusted partner for discovering the finest accommodations across Bali's most stunning
          destinations. From beachfront resorts to luxury villas, we curate exceptional stays.
        </p>
        <p>
          With years of experience in hospitality, we connect travelers with premium hotels in Seminyak, Ubud, Canggu,
          Nusa Dua, and beyond. Every property is carefully selected for quality and comfort.
        </p>
        <p>
          Experience Bali's rich culture, pristine beaches, and world-class service with our handpicked collection of
          hotels and resorts.
        </p>
        <a href="about_us.php" class="btn">Learn More</a>
      </div>
    </section>

    <!-- Sales -->
    <section class="sales container" id="sales">
      <!-- Box 1 -->
      <div class="box">
        <i class="bx bx-search-alt"></i>
        <h3>Browse & Discover Hotels</h3>
        <p>Explore our curated selection of premium hotels across Bali's most popular destinations and hidden gems.</p>
      </div>
      <!-- Box 2 -->
      <div class="box">
        <i class="bx bx-calendar-check"></i>
        <h3>Book Your Perfect Stay</h3>
        <p>Reserve your dream accommodation with instant confirmation and flexible booking options tailored to your needs.</p>
      </div>
      <!-- Box 3 -->
      <div class="box">
        <i class="bx bx-happy"></i>
        <h3>Enjoy Paradise Experience</h3>
        <p>Relax and immerse yourself in Bali's beauty with exceptional service, stunning views, and unforgettable memories.</p>
      </div>
    </section>

    <!-- Properties (Featured Hotels) -->
    <section class="properties container" id="properties">
      <div class="heading">
        <span>Featured</span>
        <h2>Our Top Hotels In Bali</h2>
        <p>
          Discover handpicked luxury accommodations <br />
          across Bali's most stunning locations
        </p>
      </div>
      <div class="properties-container container">
        <?php if (!empty($hotels)): ?>
          <?php foreach ($hotels as $hotel): ?>
            <?php
              // mapping kolom
              $name   = htmlspecialchars($hotel['name'] ?? '');
              $city   = htmlspecialchars($hotel['city'] ?? '');
              $region = htmlspecialchars($hotel['region'] ?? '');
              $price  = (int)($hotel['price_per_night'] ?? 0);
              $rating = (float)($hotel['rating'] ?? 0);
              $image  = htmlspecialchars($hotel['image'] ?? '');
            ?>
            <div class="hotel-card">
              <img src="<?= $image ?>" alt="<?= $name ?>" />
              <div class="hotel-info">
                <div class="hotel-rating">
                  <?php
                    // tampilkan bintang berdasarkan rating
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
                <a href="index.php?page=hotel_detail&id=<?= (int)$hotel['id'] ?>" class="btn-detail">Detail</a>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p>Belum ada data hotel di database.</p>
        <?php endif; ?>
      </div>
    </section>

    <div class="see-more-btn" style="text-align: center; margin-top: 20px">
      <a href="index.php?page=hotels" class="btn">See More</a>
    </div>

    <!-- NewsLetter -->
    <section class="newsletter container">
      <h2>Ready to Book Your Dream Hotel? <br />Let us help you find the perfect stay</h2>
      <form action="">
        <input type="email" id="email-box" placeholder="yourmail@gmail.com" required />
        <input type="submit" value="Subscribe" class="btn" />
      </form>
    </section>

    <!-- Footer -->
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
