<!-- app/views/admin/hotels/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Hotel | Admin</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
    <style>
        .form-wrap {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,.08);
        }
        .form-wrap h1 {
            margin-bottom: 16px;
        }
        .form-group {
            margin-bottom: 12px;
        }
        .form-group label {
            display: block;
            margin-bottom: 4px;
            font-weight: 600;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .btn-submit {
            padding: 10px 16px;
            border: none;
            border-radius: 999px;
            cursor: pointer;
        }
        .alert-error {
            padding: 8px 12px;
            background: #fee2e2;
            border-radius: 8px;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
    <div class="form-wrap">
        <h1>Tambah Hotel Baru</h1>

        <?php if (!empty($errors)): ?>
            <div class="alert-error">
                <ul>
                    <?php foreach ($errors as $err): ?>
                        <li><?= htmlspecialchars($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="index.php?page=admin_hotel_store" method="POST">
            <div class="form-group">
                <label for="name">Nama Hotel</label>
                <input type="text" id="name" name="name" required
                       value="<?= htmlspecialchars($old['name'] ?? '') ?>"
                       placeholder="Aston Denpasar Hotel">
            </div>

            <div class="form-group">
                <label for="city">Kota</label>
                <input type="text" id="city" name="city" required
                       value="<?= htmlspecialchars($old['city'] ?? '') ?>"
                       placeholder="Denpasar">
            </div>

            <div class="form-group">
                <label for="region">Region / Lokasi</label>
                <select id="region" name="region" required>
                    <option value="">-- Pilih Lokasi --</option>
                    <option value="Bali"       <?= (isset($old['region']) && $old['region'] === 'Bali') ? 'selected' : '' ?>>Bali</option>
                    <option value="Jakarta"    <?= (isset($old['region']) && $old['region'] === 'Jakarta') ? 'selected' : '' ?>>Jakarta</option>
                    <option value="Yogyakarta" <?= (isset($old['region']) && $old['region'] === 'Yogyakarta') ? 'selected' : '' ?>>Yogyakarta</option>
                </select>
            </div>

            <div class="form-group">
                <label for="type">Tipe</label>
                <select id="type" name="type" required>
                    <option value="">-- Pilih Tipe --</option>
                    <option value="Resort" <?= (isset($old['type']) && $old['type'] === 'Resort') ? 'selected' : '' ?>>Resort</option>
                    <option value="Hotel"  <?= (isset($old['type']) && $old['type'] === 'Hotel') ? 'selected' : '' ?>>Hotel</option>
                    <option value="Hostel" <?= (isset($old['type']) && $old['type'] === 'Hostel') ? 'selected' : '' ?>>Hostel</option>
                    <option value="Villa"  <?= (isset($old['type']) && $old['type'] === 'Villa') ? 'selected' : '' ?>>Villa</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price_per_night">Harga per malam (tanpa titik)</label>
                <input type="number" id="price_per_night" name="price_per_night" required min="0"
                       value="<?= htmlspecialchars($old['price_per_night'] ?? '') ?>"
                       placeholder="449450">
            </div>

            <div class="form-group">
                <label for="rating">Rating (0.0 - 5.0)</label>
                <input type="number" id="rating" name="rating" step="0.1" min="0" max="5" required
                       value="<?= htmlspecialchars($old['rating'] ?? '') ?>"
                       placeholder="4.8">
            </div>

            <div class="form-group">
                <label for="image">Path Gambar</label>
                <input type="text" id="image" name="image" required
                       value="<?= htmlspecialchars($old['image'] ?? '') ?>"
                       placeholder="public/assets/img/room1.jpg">
            </div>

            <button type="submit" class="btn-submit">Simpan Hotel</button>
        </form>
    </div>
</body>
</html>
