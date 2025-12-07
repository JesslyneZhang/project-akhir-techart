<?php
// app/config/Database.php
class Database
{
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        $host   = '127.0.0.1';
        $dbName = 'db_hotel';   // GANTI sesuai nama DB kamu
        $dbUser = 'root';           // GANTI user DB
        $dbPass = '';               // GANTI password DB

        $dsn = "mysql:host=$host;dbname=$dbName;charset=utf8mb4";

        $this->pdo = new PDO($dsn, $dbUser, $dbPass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
