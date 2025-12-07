<?php
// app/models/Booking.php

require_once __DIR__ . '/../config/Database.php';

class Booking
{
    private $conn;
    private $table = 'bookings';

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function create($data)
    {
        $sql = "INSERT INTO {$this->table}
                (hotel_id, first_name, last_name, email, room_type, guests, arrival_datetime, pickup_option, status)
                VALUES (:hotel_id, :first_name, :last_name, :email, :room_type, :guests, :arrival_datetime, :pickup_option, :status)";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':hotel_id'        => $data['hotel_id'],
            ':first_name'      => $data['first_name'],
            ':last_name'       => $data['last_name'],
            ':email'           => $data['email'],
            ':room_type'       => $data['room_type'],
            ':guests'          => $data['guests'],
            ':arrival_datetime'=> $data['arrival_datetime'],
            ':pickup_option'   => $data['pickup_option'],
            ':status'          => $data['status'] ?? 'pending',
        ]);
    }

    // untuk admin: list semua booking + nama hotel
    public function getAllWithHotel()
    {
        $sql = "SELECT b.*, h.name AS hotel_name
                FROM {$this->table} b
                LEFT JOIN hotels h ON b.hotel_id = h.id
                ORDER BY b.created_at DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
