<?php
// $hotel sudah dikirim dari controller
$name        = htmlspecialchars($hotel['name'] ?? '');
$city        = htmlspecialchars($hotel['city'] ?? '');
$region      = htmlspecialchars($hotel['region'] ?? '');
$address     = htmlspecialchars($hotel['address'] ?? ($city && $region ? "$city, $region" : ''));
$price       = (int)($hotel['price_per_night'] ?? 0);
$rating      = (float)($hotel['rating'] ?? 0);
$type        = htmlspecialchars($hotel['type'] ?? 'Premium Room');
$imageMain   = htmlspecialchars($hotel['image'] ?? 'public/assets/img/detailroom4.jpg');
$image2      = !empty($hotel['image_2']) ? htmlspecialchars($hotel['image_2']) : null;
$image3      = !empty($hotel['image_3']) ? htmlspecialchars($hotel['image_3']) : null;
$image4      = !empty($hotel['image_4']) ? htmlspecialchars($hotel['image_4']) : null;
$mapEmbed    = $hotel['map_embed_url'] ?? '';
$description = !empty($hotel['description']) ? $hotel['description'] : 'Experience luxury and comfort in this room...';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $name ?> - BuddiesHotel</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.6/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="public/assets/css/detailroom.css" />
    <link rel="stylesheet" href="public/assets/css/style.css" />
  </head>
  <body>
    <!-- ===== NAVBAR ===== -->
    <header>
      <div class="nav container">
        <a href="index.php?page=home" class="logo"> <i class="bx bx-home-alt"></i>BuddiesHotel </a>

        <input type="checkbox" id="menu" />
        <label for="menu"><i class="bx bx-menu" id="menu-icon"></i></label>

        <ul class="navbar">
          <li><a href="index.php?page=home">Home</a></li>
           <li><a href="index.php?page=about_us">About Us</a></li>
          <li><a href="index.php?page=contact_us">Contact Us</a></li>
          <li><a href="index.php?page=hotels" class="active">Hotel</a></li>
        </ul>

        <a href="index.php?page=login" class="btn">Log In</a>
      </div>
    </header>

    <!-- ================= HERO ================= -->
    <section class="contact-page-hero">
      <div class="breadcrumb-box">
        <h1>Hotel Details</h1>
        <div class="breadcrumb">
          <a href="index.php?page=home">Home</a>
          <i class="bx bx-chevron-right"></i>
          <a href="index.php?page=hotels">Hotel</a>
          <i class="bx bx-chevron-right"></i>
          <span><?= $name ?></span>
        </div>
      </div>
    </section>

    <!-- Main Content -->
    <div class="container content-wrapper">
      <div class="left-content">
        <!-- Gallery -->
        <div class="room-gallery">
          <div class="thumbnail">
            <img src="<?= $image2 ?: $imageMain ?>" alt="" />
          </div>
          <div class="thumbnail">
            <img src="<?= $image3 ?: $imageMain ?>" alt="" />
          </div>
          <div class="thumbnail">
            <img src="<?= $image4 ?: $imageMain ?>" alt="" />
          </div>

          <div class="main-image">
            <img src="<?= $imageMain ?>" alt="" />
          </div>
        </div>

        <!-- Room Header -->
        <div class="room-header">
          <div class="room-title">
            <h2><?= $name ?></h2>
            <span class="badge"><?= $type ?></span>
          </div>
          <div class="rating">
            <span class="stars">
              <?php
                $fullStars = floor($rating);
                $hasHalf   = ($rating - $fullStars) >= 0.5;
                for ($i = 0; $i < $fullStars; $i++) {
                  echo '<i class="bx bxs-star"></i>';
                }
                if ($hasHalf) {
                  echo '<i class="bx bxs-star-half"></i>';
                }
                $empty = 5 - $fullStars - ($hasHalf ? 1 : 0);
                for ($i = 0; $i < $empty; $i++) {
                  echo '<i class="bx bx-star"></i>';
                }
              ?>
            </span>
            <span>(<?= number_format($rating, 1) ?> Rating)</span>
          </div>
        </div>

        <div class="location"><i class="bx bx-map"></i> <?= $address ?></div>

        <div class="price-booking">
          <div class="price">
            Rp <?= number_format($price, 0, ',', '.') ?> <span>/ night</span>
          </div>
          <a href="index.php?page=booking&hotel_id=<?= (int)$hotel['id'] ?>" class="btn-booking">Book Now</a>
        </div>

        <!-- Specs (sementara statis sama semua hotel) -->
        <div class="room-specs">
          <div class="spec-item"><i class="bx bx-bed"></i> 1 King Bed</div>
          <div class="spec-item"><i class="bx bx-ruler"></i> 450 sqft</div>
          <div class="spec-item"><i class="bx bx-user"></i> 2 Guests</div>
          <div class="spec-item"><i class="bx bx-shower"></i> Private Bath</div>
        </div>

        <!-- Overview -->
        <div class="section">
          <h3>Overview</h3>
          <p><?= nl2br(htmlspecialchars($description)) ?></p>
        </div>

        <!-- Amenities (statis dulu) -->
        <div class="section">
          <h3>Room Amenities</h3>
          <div class="amenities-grid">
            <div class="amenity-item"><i class="bx bx-wind amenity-icon"></i> Air Conditioning</div>
            <div class="amenity-item"><i class="bx bx-tv amenity-icon"></i> 55" Smart TV</div>
            <div class="amenity-item"><i class="bx bx-wifi amenity-icon"></i> High-Speed Wi-Fi</div>
            <div class="amenity-item"><i class="bx bx-lock-alt amenity-icon"></i> Electronic Safe</div>
            <div class="amenity-item"><i class="bx bx-volume-full amenity-icon"></i> Premium Sound System</div>
            <div class="amenity-item"><i class="bx bxs-magic-wand amenity-icon"></i> Vanity Mirror</div>
            <div class="amenity-item"><i class="bx bx-bath amenity-icon"></i> Luxury Bathtub</div>
            <div class="amenity-item"><i class="bx bx-shower amenity-icon"></i> Rain Shower</div>
            <div class="amenity-item"><i class="bx bx-time-five amenity-icon"></i> Smart Alarm Clock</div>
          </div>
        </div>

        <!-- Booking Rules (statis) -->
        <div class="section">
          <h3>Booking Rules</h3>
          <div class="rules-grid">
            <div class="rules-column">
              <h4>Check In</h4>
              <div class="rule-item">Check-in from 2:00 PM</div>
              <div class="rule-item">Early check-in subject to availability</div>
              <div class="rule-item">Valid ID required</div>
            </div>

            <div class="rules-column">
              <h4>Check Out</h4>
              <div class="rule-item">Check-out before 12:00 PM</div>
              <div class="rule-item">Late check-out available</div>
              <div class="rule-item">Express check-out available</div>
            </div>
          </div>
        </div>

        <!-- Map -->
        <div class="section">
          <h3>Location</h3>
          <div class="map-container">
            <?php if (!empty($mapEmbed)): ?>
              <iframe
                src="<?= htmlspecialchars($mapEmbed) ?>"
                width="100%"
                height="100%"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            <?php else: ?>
              <p>Map location is not available for this hotel.</p>
            <?php endif; ?>
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
  </body>
</html>
