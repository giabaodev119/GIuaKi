<?php
require_once __DIR__ . '/../config/Database.php';

class Subject {
    private $conn;
    private $table = "HocPhan";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($maHP) {
        $query = "SELECT * FROM HocPhan WHERE MaHP = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$maHP]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
