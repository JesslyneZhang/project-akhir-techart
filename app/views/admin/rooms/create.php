<?php
// Ambil hotel_id dari query string
$hotelId = $_GET['hotel_id'] ?? null;
if (!$hotelId) {
    echo "Hotel tidak ditemukan.";
    exit;
}

// Ambil data hotel untuk menampilkan di form
$query = "SELECT * FROM hotels WHERE id = :hotel_id";
$stmt = $conn->prepare($query);
$stmt->bindValue(':hotel_id', $hotelId, PDO::PARAM_INT);
$stmt->execute();
$hotel = $stmt->fetch();

// Pastikan hotel ditemukan
if (!$hotel) {
    echo "Hotel tidak ditemukan.";
    exit;
}
?>

<h1>Tambah Kamar untuk Hotel: <?= htmlspecialchars($hotel['name']) ?></h1>

<form action="index.php?page=admin_store_room" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="hotel_id" value="<?= (int)$hotelId ?>">

    <label for="room_name">Nama Kamar:</label>
    <input type="text" name="room_name" required><br>

    <label for="room_type">Tipe Kamar:</label>
    <input type="text" name="room_type" required><br>

    <label for="price">Harga:</label>
    <input type="number" name="price" required><br>

    <label for="description">Deskripsi:</label>
    <textarea name="description" required></textarea><br>

    <label for="images">Pilih Gambar Kamar (Pilih lebih dari satu gambar):</label>
    <input type="file" name="images[]" multiple required><br>

    <button type="submit">Simpan</button>
</form>
