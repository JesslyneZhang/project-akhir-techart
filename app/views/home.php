<?php require 'layouts/header.php'; ?>

<h1>Welcome to Our Hotel</h1>
<h2>Available Rooms</h2>
<ul>
    <?php foreach($rooms as $room): ?>
        <li>
            <?= $room['room_type'] ?> - $<?= $room['price'] ?><br>
            <?= $room['description'] ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php require 'layouts/footer.php'; ?>
