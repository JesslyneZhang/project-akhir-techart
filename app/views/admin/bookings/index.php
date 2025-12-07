<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - Daftar Booking</title>
  <link rel="stylesheet" href="public/assets/css/style.css">
  <style>
    body { background:#e5e7eb; font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }

  /* OVERRIDE header global */
  header.admin-header {
    position: static !important;   /* ini kunci supaya nggak nutup konten */
  }

  .admin-header {
    background:#111827;
    color:#fff;
    padding:12px 32px;
    display:flex;
    align-items:center;
    justify-content:space-between;
  }

  .admin-header .brand {
    font-weight:700;
    font-size:18px;
  }
  .admin-nav a {
    color:#e5e7eb;
    text-decoration:none;
    margin-left:16px;
    font-size:14px;
    padding:6px 10px;
    border-radius:999px;
  }
  .admin-nav a.active {
    background:#f97316;
    color:#111827;
  }
  .admin-nav a:hover {
    background:#4b5563;
  }

  .page-wrapper {
    max-width:1100px;
    margin:32px auto;      /* cukup, header sudah tidak fixed */
    padding:0 16px;
  }

    h1 {
      font-size:28px;
      color:#111827;
    }
    table { width:100%; border-collapse:collapse; background:#fff; border-radius:12px; overflow:hidden; }
    th, td { padding:8px 10px; font-size:13px; border-bottom:1px solid #e5e7eb; }
    th { background:#f3f4f6; text-align:left; }
    tr:last-child td { border-bottom:none; }
  </style>
</head>
<body>
  <!-- NAVBAR ADMIN -->
  <header class="admin-header">
    <div class="brand">BuddiesHotel Admin</div>
    <nav class="admin-nav">
      <a href="index.php?page=admin_hotels">Hotel</a>
      <a href="index.php?page=admin_bookings" class="active">Booking</a>
      <a href="index.php?page=logout">Logout</a>
    </nav>
  </header>

  <div class="page-wrapper">
    <h1 style="margin-top:10px;">Daftar Booking</h1>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Hotel</th>
          <th>Nama Tamu</th>
          <th>Email</th>
          <th>Room Type</th>
          <th>Guests</th>
          <th>Arrival</th>
          <th>Pickup</th>
          <th>Status</th>
          <th>Dibuat</th>
        </tr>
      </thead>
      <tbody>
      <?php if (!empty($bookings)): ?>
        <?php foreach ($bookings as $b): ?>
          <tr>
            <td><?= htmlspecialchars($b['id']) ?></td>
            <td><?= htmlspecialchars($b['hotel_name'] ?? '-') ?></td>
            <td><?= htmlspecialchars($b['first_name'] . ' ' . $b['last_name']) ?></td>
            <td><?= htmlspecialchars($b['email']) ?></td>
            <td><?= htmlspecialchars($b['room_type']) ?></td>
            <td><?= (int)$b['guests'] ?></td>
            <td><?= htmlspecialchars($b['arrival_datetime']) ?></td>
            <td><?= htmlspecialchars($b['pickup_option']) ?></td>
            <td><?= htmlspecialchars($b['status']) ?></td>
            <td><?= htmlspecialchars($b['created_at']) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="10">Belum ada booking.</td></tr>
      <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
