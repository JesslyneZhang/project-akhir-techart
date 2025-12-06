<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Booking - BuddiesHotel</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="public/assets/css/style.css" />
  </head>

  <body>
    <!-- NAVBAR (TIDAK DIUBAH) -->
    <header>
      <div class="nav container">
        <a href="index.php" class="logo"> <i class="bx bx-home-alt"></i>BuddiesHotel </a>

        <input type="checkbox" id="menu" />
        <label for="menu">
          <i class="bx bx-menu" id="menu-icon"></i>
        </label>

        <ul class="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li><a href="contact_us.php">Contact Us</a></li>
          <li><a href="hotel.php">Hotel</a></li>
        </ul>

        <a href="login.php" class="btn">Log In</a>
      </div>
    </header>

    <div class="page-booking">
      <div class="booking-wrapper">
        <!-- GALLERY -->
        <div class="image-gallery">
          <div class="gallery-item"><img src="public/assets/img/detailroom1.jpg" /></div>
          <div class="gallery-item"><img src="public/assets/img/detailroom3.jpg" /></div>
          <div class="gallery-item"><img src="public/assets/img/beach1.jpg" /></div>
        </div>

        <!-- FORM -->
        <div class="form-container">
          <div class="form-header">
            <h1>Hotel Booking</h1>
            <p>Fill in your details to reserve your stay</p>
          </div>

          <form action="payment.php" method="POST">
            <div class="section-title">Personal Information</div>
            <div class="form-row">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" required />
                <i class="bx bx-user"></i>
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" required />
                <i class="bx bx-user"></i>
              </div>
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" required />
              <i class="bx bx-envelope"></i>
            </div>

            <div class="section-title">Room Details</div>
            <div class="form-row">
              <div class="form-group">
                <label>Room Type</label>
                <select name="room_type" required>
  <option value="">Select Room</option>
  <option value="Deluxe Ocean|1200000">Deluxe Ocean — Rp 1.200.000/night</option>
  <option value="Superior Garden|850000">Superior Garden — Rp 850.000/night</option>
  <option value="Executive Suite|950000">Executive Suite — Rp 950.000/night</option>
  <option value="Presidential Suite|1800000">Presidential Suite — Rp 1.800.000/night</option>
</select>

                <i class="bx bx-bed"></i>
              </div>

              <div class="form-group">
                <label>Guests</label>
                <input type="number" name="guests" min="1" max="10" required />
                <i class="bx bx-group"></i>
              </div>
            </div>

            <div class="section-title">Schedule</div>
            <div class="form-group">
              <label>Arrival Date</label>
<div class="datetime-group">
    <input type="date" name="arrival_date" required />
    <input type="time" name="arrival_time" required />
    <select name="arrival_ampm" required>
      <option value="AM">AM</option>
      <option value="PM">PM</option>
    </select>
</div>

<label>Check-out Date</label>
<input type="date" name="checkout_date" required>

            </div>

            <div class="section-title">Additional Service</div>
            <div class="service-group">
              <label class="service-card">
                <input type="radio" name="pickup" value="Free Pickup" checked />
                <div class="service-left">
                  <i class="bx bx-car"></i>
                  <div class="service-text">
                    <h4>Free Pickup</h4>
                    <p>Hotel will pick you up</p>
                  </div>
                </div>
                <div class="checkmark">
                  <i class="bx bx-check"></i>
                </div>
              </label>

              <label class="service-card">
                <input type="radio" name="pickup" value="No Pickup" />
                <div class="service-left">
                  <i class="bx bx-walk"></i>
                  <div class="service-text">
                    <h4>No Pickup</h4>
                    <p>You come by yourself</p>
                  </div>
                </div>
                <div class="checkmark">
                  <i class="bx bx-check"></i>
                </div>
              </label>
            </div>

            <button type="submit" class="submit-btn">Confirm Booking</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
