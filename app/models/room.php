<?php
require_once __DIR__ . '/../../config/database.php';

class Room {
    private $conn;
    private $table = "rooms";

<<<<<<< HEAD
    public function __construct() {
=======
    public function __construct(){
>>>>>>> d56aed8b910e289015a741ac6753552a1bfae8b7
        $database = new Database();
        $this->conn = $database->getConnection();
    }

<<<<<<< HEAD
    // Simpan kamar baru (admin)
    public function create($hotelId, $roomType, $price, $capacity) {
        $query = "INSERT INTO " . $this->table . " (hotel_id, room_type, price, capacity) 
                  VALUES (:hotel_id, :room_type, :price, :capacity)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':hotel_id', $hotelId, PDO::PARAM_INT);
        $stmt->bindValue(':room_type', $roomType);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':capacity', $capacity);
        return $stmt->execute();
    }

    // 🔹 Dipakai di halaman DETAIL HOTEL
    public function getRoomsByHotel($hotelId) {
        $query = "SELECT * FROM " . $this->table . " 
                  WHERE hotel_id = :hotel_id
                  ORDER BY price ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':hotel_id', $hotelId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // 🔹 Dipakai di BookingController (form & store)
    public function getRoomById($id) {
        $query = "SELECT * FROM " . $this->table . " 
                  WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
=======
    public function getAllRooms(){
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
>>>>>>> d56aed8b910e289015a741ac6753552a1bfae8b7
}
