<?php
require_once __DIR__ . '/../config/Database.php';

class Registration {
    private $conn;
    private $table = "DangKy";
    private $detailTable = "ChiTietDangKy";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function createRegistration($maSV) {
        $query = "INSERT INTO " . $this->table . " (NgayDK, MaSV) VALUES (NOW(), ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$maSV]);
        return $this->conn->lastInsertId();
    }

    public function addSubjectToRegistration($maDK, $maHP) {
        $query = "INSERT INTO " . $this->detailTable . " (MaDK, MaHP) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$maDK, $maHP]);
    }
}
?>
