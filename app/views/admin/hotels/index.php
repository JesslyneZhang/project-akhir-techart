<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - Daftar Hotel</title>
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
      margin:0 0 16px;
      font-size:28px;
      color:#111827;
    }
    .top-actions {
      display:flex;
      justify-content:flex-end;
      margin-bottom:12px;
    }
    .btn-add {
      border-radius:999px;
      background:#111827;
      color:#fff;
      padding:8px 16px;
      text-decoration:none;
      font-size:14px;
    }
    .btn-add:hover {
      opacity:.9;
    }
    table { width:100%; border-collapse:collapse; background:#fff; border-radius:12px; overflow:hidden; }
    th, td { padding:10px 12px; font-size:14px; border-bottom:1px solid #e5e7eb; }
    th { background:#f3f4f6; text-align:left; }
    tr:last-child td { border-bottom:none; }
  </style>
</head>
<body>
  <!-- NAVBAR ADMIN -->
  <header class="admin-header">
    <div class="brand">BuddiesHotel Admin</div>
    <nav class="admin-nav">
      <a href="index.php?page=admin_hotels" class="active">Hotel</a>
      <a href="index.php?page=admin_bookings">Booking</a>
      <a href="index.php?page=logout">Logout</a>
    </nav>
  </header>

  <div class="page-wrapper">
    <h1>Daftar Hotel</h1>

    <div class="top-actions">
      <a href="index.php?page=admin_hotel_create" class="btn-add">Tambah Hotel</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Kota</th>
          <th>Region</th>
          <th>Tipe</th>
          <th>Harga / malam</th>
          <th>Rating</th>
        </tr>
      </thead>
      <tbody>
      <?php if (!empty($hotels)): ?>
        <?php foreach ($hotels as $hotel): ?>
          <tr>
            <td><?= htmlspecialchars($hotel['id']) ?></td>
            <td><?= htmlspecialchars($hotel['name']) ?></td>
            <td><?= htmlspecialchars($hotel['city']) ?></td>
            <td><?= htmlspecialchars($hotel['region']) ?></td>
            <td><?= htmlspecialchars($hotel['type']) ?></td>
            <td>IDR <?= number_format($hotel['price_per_night'], 0, ',', '.') ?></td>
            <td><?= htmlspecialchars($hotel['rating']) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr><td colspan="7">Belum ada data hotel.</td></tr>
      <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
