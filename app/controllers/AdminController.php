<?php
require_once __DIR__ . '/../models/booking.php';

class AdminController {

    private function requireAdmin() {
        if (empty($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            // kalau bukan admin, lempar ke login
            header('Location: index.php?page=login');
            exit;
        }
    }

    // halaman list semua booking
    public function bookingsIndex() {
        $this->requireAdmin();

        $bookingModel = new Booking();
        $bookings = $bookingModel->getAllWithRelations();

        require __DIR__ . '/../views/admin/bookings.php';
    }

    // proses update status
    public function updateBookingStatus() {
        $this->requireAdmin();

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?page=admin_bookings');
            exit;
        }

        $id     = $_POST['booking_id'] ?? null;
        $status = $_POST['status'] ?? null;

        if (!$id || !$status) {
            header('Location: index.php?page=admin_bookings');
            exit;
        }

        $bookingModel = new Booking();
        $bookingModel->updateStatus($id, $status);

        header('Location: index.php?page=admin_bookings');
        exit;
    }
}
