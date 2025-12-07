<?php
class Database {
    private $host = "127.0.0.1";
    private $db_name = "db_hotel";  // <-- ini harus sama dengan di DBeaver
    private $username = "root";     // sesuaikan
    private $password = "";         // isi kalau MySQL kamu pakai password
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
