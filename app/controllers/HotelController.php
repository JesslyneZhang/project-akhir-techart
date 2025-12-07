<?php
// app/controllers/HotelController.php

require_once __DIR__ . '/../models/Hotel.php';

class HotelController
{
    private $hotelModel;

    public function __construct()
    {
        $this->hotelModel = new Hotel();
    }

    // USER: list hotel (view yang kamu kirim tadi)
    public function index()
    {
        $hotels = $this->hotelModel->getAll();
        require __DIR__ . '/../views/hotels/index.php';
    }

    // ADMIN: list hotel
    public function adminIndex()
    {
        $hotels = $this->hotelModel->getAll();
        require __DIR__ . '/../views/admin/hotels/index.php';
    }

    // ADMIN: form tambah hotel
    public function adminCreate()
    {
        $errors = array();
        $old    = array();
        require __DIR__ . '/../views/admin/hotels/create.php';
    }

    // ADMIN: proses simpan hotel
    public function adminStore()
    {
        $name   = trim($_POST['name'] ?? '');
        $city   = trim($_POST['city'] ?? '');
        $region = trim($_POST['region'] ?? '');
        $type   = trim($_POST['type'] ?? '');
        $price  = (int)($_POST['price_per_night'] ?? 0);
        $rating = (float)($_POST['rating'] ?? 0);
        $image  = trim($_POST['image'] ?? '');

        $errors = array();
        $old = array(
            'name'            => $name,
            'city'            => $city,
            'region'          => $region,
            'type'            => $type,
            'price_per_night' => $price,
            'rating'          => $rating,
            'image'           => $image,
        );

        if (!$name)   $errors[] = 'Nama hotel wajib diisi.';
        if (!$city)   $errors[] = 'Kota wajib diisi.';
        if (!$region) $errors[] = 'Region wajib diisi.';
        if (!$type)   $errors[] = 'Tipe wajib diisi.';
        if ($price <= 0)       $errors[] = 'Harga harus lebih dari 0.';
        if ($rating <= 0 || $rating > 5) $errors[] = 'Rating harus antara 0 - 5.';
        if (!$image)  $errors[] = 'Path gambar wajib diisi.';

        if (!empty($errors)) {
            require __DIR__ . '/../views/admin/hotels/create.php';
            return;
        }

        $this->hotelModel->create($name, $city, $region, $type, $price, $rating, $image);

        header('Location: index.php?page=admin_hotels');
        exit;
    }

    public function home()
{
    // ambil semua hotel lalu batasi 6 teratas sebagai featured
    $allHotels = $this->hotelModel->getAll();
    $hotels    = array_slice($allHotels, 0, 6);
    require __DIR__ . '/../views/home/index.php';
}

public function show()
{
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    if ($id <= 0) {
        echo "Hotel tidak ditemukan.";
        return;
    }

    $hotel = $this->hotelModel->find($id);
    if (!$hotel) {
        echo "Hotel tidak ditemukan.";
        return;
    }

    require __DIR__ . '/../views/hotels/show.php';
}

}
