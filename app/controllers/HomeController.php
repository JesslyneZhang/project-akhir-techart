<?php
require_once __DIR__ . '/../Models/Room.php';

class HomeController {
    public function index(){
        $roomModel = new Room();
        $rooms = $roomModel->getAllRooms();
        require __DIR__ . '/../Views/home.php';
    }
}
