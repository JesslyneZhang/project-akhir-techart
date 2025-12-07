<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/database.php';

$db = new Database();
$conn = $db->getConnection();

if ($conn) {
    echo "Koneksi BERHASIL ke database db_hotel 🎉";
} else {
    echo "Koneksi GAGAL 😢";
}
