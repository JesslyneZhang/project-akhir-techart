<?php
session_start();

if (!isset($_POST['room_type'])) {
    die("Data booking tidak ditemukan. Silakan lakukan pemesanan ulang.");
}

// Ambil semua data dari POST
$room = explode("|", $_POST['room_type']);
$roomName = $room[0];
$roomPrice = intval($room[1]);
$arrival = $_POST['arrival_date'];
$checkout = $_POST['checkout_date'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$guests = $_POST['guests'];
$pickup = $_POST['pickup'];

// Hitung malam
$nightCount = (strtotime($checkout) - strtotime($arrival)) / 86400;
if ($nightCount < 1) $nightCount = 1;

$totalRoom = $roomPrice * $nightCount;
$tax = $totalRoom * 0.15;
$grandTotal = $totalRoom + $tax;

// Simpan ke SESSION
$_SESSION['booking'] = [
    "first" => $first,
    "last" => $last,
    "email" => $email,
    "arrival" => $arrival,
    "checkout" => $checkout,
    "room" => $roomName,
    "guests" => $guests,
    "pickup" => $pickup,
    "night" => $nightCount,
    "total" => $grandTotal
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment</title>
<link rel="stylesheet" href="public/assets/css/payment.css">
</head>
<body>

<div class="payment-container">

    <h2>Payment Details</h2>

    <div class="summary-box">
        <p><strong>Name:</strong> <?= $first . " " . $last ?></p>
        <p><strong>Room:</strong> <?= $roomName ?></p>
        <p><strong>Nights:</strong> <?= $nightCount ?></p>
        <p><strong>Pickup:</strong> <?= $pickup ?></p>
        <h3>Total: Rp <?= number_format($grandTotal, 0, ',', '.') ?></h3>
    </div>

    <form action="confirm_booking.php" method="POST">

        <label>Card Number</label>
        <input type="text" name="card" required>

        <label>Card Holder Name</label>
        <input type="text" name="holder" required>

        <label>Expiry Date</label>
        <input type="month" name="exp" required>

        <label>CVV</label>
        <input type="text" name="cvv" required>

        <button type="submit" class="submit-btn">Confirm Payment</button>
    </form>

</div>

</body>
</html>
