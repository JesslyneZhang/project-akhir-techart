<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/app/controllers/HotelController.php';
require_once __DIR__ . '/app/controllers/AuthController.php';
require_once __DIR__ . '/app/controllers/BookingController.php';

$hotelController   = new HotelController();
$authController    = new AuthController();
$bookingController = new BookingController();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
    case 'home':
        $hotelController->home();
        break;

    case 'about_us':
        require __DIR__ . '/app/views/pages/about_us.php';
        break;

    case 'contact_us':
        require __DIR__ . '/app/views/pages/contact_us.php';
        break;

    case 'hotels':
        $hotelController->index();
        break;

    case 'hotel_detail':
        $hotelController->show();
        break;

    // ===== AUTH =====
    case 'login':
        $authController->showLoginForm();
        break;

    case 'login_process':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $authController->login();
        } else {
            header('Location: index.php?page=login');
        }
        break;

    case 'logout':
        $authController->logout();
        break;

    // ===== BOOKING (INI YANG KAMU BUTUHKAN) =====
    case 'booking':
        $bookingController->createForm();
        break;

    case 'booking_store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookingController->store();
        } else {
            header('Location: index.php?page=booking');
        }
        break;

    case 'booking_success':
        $bookingController->success();
        break;

    // ===== ADMIN =====
    case 'admin_hotels':
        $hotelController->adminIndex();
        break;

    case 'admin_hotel_create':
        $hotelController->adminCreate();
        break;

    case 'admin_hotel_store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $hotelController->adminStore();
        } else {
            header('Location: index.php?page=admin_hotels');
        }
        break;

    case 'admin_bookings':
        $bookingController->adminIndex();
        break;

    default:
        echo "Halaman tidak ditemukan. page = " . htmlspecialchars($page);
        break;
}
