<?php
// app/models/Hotel.php

require_once __DIR__ . '/../config/Database.php';

class Hotel
{
    private $conn;
    private $table = 'hotels';

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->conn->query("SELECT * FROM {$this->table} ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    public function create($name, $city, $region, $type, $pricePerNight, $rating, $image)
    {
        $sql = "INSERT INTO {$this->table} (name, city, region, type, price_per_night, rating, image)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$name, $city, $region, $type, $pricePerNight, $rating, $image]);
    }
}
