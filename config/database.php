<?php
<<<<<<< HEAD
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
=======
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_hotel";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
>>>>>>> d56aed8b910e289015a741ac6753552a1bfae8b7
