<?php
require_once __DIR__ . '/../../config/database.php';

class Room {
    private $conn;
    private $table = "rooms";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllRooms(){
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
