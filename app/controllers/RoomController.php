<?php
require_once __DIR__ . '/../models/room.php';

class RoomController {

    private function requireAdmin() {
        if (empty($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: index.php?page=login');
            exit;
        }
    }

    // Halaman tambah kamar
    public function create($hotelId) {
        $this->requireAdmin();
        require __DIR__ . '/../views/admin/rooms/create.php';
    }

    // Simpan kamar baru
    public function store() {
        $this->requireAdmin();

        $hotelId     = $_POST['hotel_id'] ?? null;
        $roomType    = $_POST['room_type'] ?? null;
        $price       = $_POST['price'] ?? null;
        $capacity    = $_POST['capacity'] ?? null;

        if (!$hotelId || !$roomType || !$price || !$capacity) {
            echo "All fields are required!";
            return;
        }

        $roomModel = new Room();
        $success = $roomModel->create($hotelId, $roomType, $price, $capacity);

        if ($success) {
            header("Location: index.php?page=admin_hotels&id=$hotelId");
            exit;
        } else {
            echo "Failed to create room.";
        }
    }
}
