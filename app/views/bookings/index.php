<?php
// $bookings dikirim dari BookingController::myBookings
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Bookings | BuddiesHotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="public/assets/css/style.css" />
</head>
<body>
<header>
  <div class="nav container">
    <a href="index.php" class="logo">
      <i class="bx bx-home-alt"></i>BuddiesHotel
    </a>

    <ul class="navbar">
      <li><a href="index.php?page=hotels">Hotel</a></li>
      <li><a href="index.php?page=my_bookings" class="active">My Bookings</a></li>
    </ul>

    <?php if (!empty($_SESSION['user'])): ?>
      <div class="nav-user">
        <span style="margin-right: 10px;">
          Hi, <?= htmlspecialchars($_SESSION['user']['name']) ?>
        </span>
        <a href="index.php?page=logout" class="btn">Logout</a>
      </div>
    <?php else: ?>
      <a href="index.php?page=login" class="btn">Log In</a>
    <?php endif; ?>
  </div>
</header>

<div class="container" style="margin-top:40px; margin-bottom:40px;">
    <h1>My Bookings</h1>

    <?php if (empty($bookings)): ?>
        <p>Kamu belum punya booking.</p>
    <?php else: ?>
        <table border="0" cellpadding="10" cellspacing="0" style="width:100%; margin-top:20px; border-collapse:collapse;">
            <thead>
                <tr style="border-bottom:1px solid #ddd;">
                    <th align="left">Hotel</th>
                    <th align="left">Room</th>
                    <th align="left">Check-in</th>
                    <th align="left">Check-out</th>
                    <th align="left">Total</th>
                    <th align="left">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $b): ?>
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td>
                            <?= htmlspecialchars($b['hotel_name']) ?><br>
                            <small><?= htmlspecialchars($b['city']) ?>, <?= htmlspecialchars($b['country']) ?></small>
                        </td>
                        <td><?= htmlspecialchars($b['room_name']) ?></td>
                        <td><?= htmlspecialchars($b['check_in']) ?></td>
                        <td><?= htmlspecialchars($b['check_out']) ?></td>
                        <td>Rp <?= number_format($b['total_price'], 0, ',', '.') ?></td>
                        <td><?= htmlspecialchars(ucfirst($b['status'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

</body>
</html>
