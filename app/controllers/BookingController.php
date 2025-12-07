<?php
// app/controllers/BookingController.php

require_once __DIR__ . '/../models/Booking.php';
require_once __DIR__ . '/../models/Hotel.php';

class BookingController
{
    private $bookingModel;
    private $hotelModel;

    public function __construct()
    {
        $this->bookingModel = new Booking();
        $this->hotelModel   = new Hotel();
    }

    // TAMPILKAN FORM BOOKING
    public function createForm()
    {
        $hotel = null;
        $hotelId = isset($_GET['hotel_id']) ? (int)$_GET['hotel_id'] : null;

        if ($hotelId) {
            $hotel = $this->hotelModel->find($hotelId); // boleh null kalau id nggak valid
        }

        require __DIR__ . '/../views/bookings/create.php';
    }

    // PROSES SIMPAN BOOKING
    public function store()
    {
        $hotelId       = isset($_POST['hotel_id']) && $_POST['hotel_id'] !== '' ? (int)$_POST['hotel_id'] : null;
        $firstName     = trim($_POST['first_name'] ?? '');
        $lastName      = trim($_POST['last_name'] ?? '');
        $email         = trim($_POST['email'] ?? '');
        $roomType      = trim($_POST['room_type'] ?? '');
        $guests        = (int)($_POST['guests'] ?? 1);
        $arrivalDate   = $_POST['arrival_date'] ?? '';
        $arrivalTime   = $_POST['arrival_time'] ?? '';
        $arrivalAmPm   = $_POST['arrival_ampm'] ?? 'AM';
        $pickupOption  = $_POST['pickup'] ?? 'Free Pickup';

        // validasi sederhana
        if (!$firstName || !$lastName || !$email || !$roomType || !$arrivalDate || !$arrivalTime) {
            $error = "Semua field wajib diisi.";
            // bisa render ulang form, tapi untuk kejar waktu redirect saja:
            header('Location: index.php?page=booking&error=' . urlencode($error));
            exit;
        }

        // ubah arrival_date + arrival_time + AM/PM jadi DATETIME (24 jam)
        // contoh: 2025-01-01, 02:30, PM -> 2025-01-01 14:30:00
        $timeParts = explode(':', $arrivalTime);
        $hour = (int)$timeParts[0];
        $minute = isset($timeParts[1]) ? (int)$timeParts[1] : 0;

        if (strtoupper($arrivalAmPm) === 'PM' && $hour < 12) {
            $hour += 12;
        } elseif (strtoupper($arrivalAmPm) === 'AM' && $hour == 12) {
            $hour = 0;
        }

        $arrivalTime24 = sprintf('%02d:%02d:00', $hour, $minute);
        $arrivalDateTime = $arrivalDate . ' ' . $arrivalTime24;

        $this->bookingModel->create([
            'hotel_id'        => $hotelId,
            'first_name'      => $firstName,
            'last_name'       => $lastName,
            'email'           => $email,
            'room_type'       => $roomType,
            'guests'          => $guests,
            'arrival_datetime'=> $arrivalDateTime,
            'pickup_option'   => $pickupOption,
            'status'          => 'pending',
        ]);

        header('Location: index.php?page=booking_success');
        exit;
    }

    // HALAMAN SUKSES
    public function success()
    {
        require __DIR__ . '/../views/bookings/success.php';
    }

    // ADMIN: LIST BOOKING
    public function adminIndex()
    {
        $bookings = $this->bookingModel->getAllWithHotel();
        require __DIR__ . '/../views/admin/bookings/index.php';
    }
}
