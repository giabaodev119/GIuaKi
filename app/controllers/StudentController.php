<?php
require_once __DIR__ . '/../models/Student.php';

class StudentController {
    private $studentModel;

    public function __construct() {
        $this->studentModel = new Student();
    }

    /**
     * Hiển thị danh sách sinh viên
     */
    public function index() {
        $students = $this->studentModel->getAll();
        require_once __DIR__ . '/../views/students/index.php';
    }

    /**
     * Hiển thị form thêm sinh viên
     */
    public function create() {
        require_once __DIR__ . '/../views/students/create.php';
    }

    /**
     * Xử lý thêm sinh viên
     */
    public function store() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $maSV = $_POST["MaSV"];
            $hoTen = $_POST["HoTen"];
            $gioiTinh = $_POST["GioiTinh"];
            $ngaySinh = $_POST["NgaySinh"];

            // Xử lý ảnh (nếu có tải lên)
            $hinh = "";
            if (isset($_FILES["Hinh"]) && $_FILES["Hinh"]["error"] === 0) {
                $target_dir = "public/images/"; // Thư mục lưu ảnh
                $hinh = $target_dir . basename($_FILES["Hinh"]["name"]);
                move_uploaded_file($_FILES["Hinh"]["tmp_name"], $hinh);
            }

            $maNganh = $_POST["MaNganh"];
            $data = [$maSV, $hoTen, $gioiTinh, $ngaySinh, $hinh, $maNganh];

            $this->studentModel->create($data);
            header("Location: /giuaki");
            exit();
        }
    }

    /**
     * Hiển thị form chỉnh sửa sinh viên
     */
    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header("Location: index.php");
            exit();
        }
        $student = $this->studentModel->getById($id);
        require_once __DIR__ . '/../views/students/edit.php';
    }
    
    public function update() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST["MaSV"];
            $hoTen = $_POST["HoTen"];
            $gioiTinh = $_POST["GioiTinh"];
            $ngaySinh = $_POST["NgaySinh"];
    
            // Xử lý ảnh mới nếu có
            $hinh = $_POST["old_Hinh"]; // Ảnh cũ
            if (isset($_FILES["Hinh"]) && $_FILES["Hinh"]["error"] === 0) {
                $target_dir = "public/images/";
                $hinh = $target_dir . basename($_FILES["Hinh"]["name"]);
                move_uploaded_file($_FILES["Hinh"]["tmp_name"], $hinh);
            }
    
            $maNganh = $_POST["MaNganh"];
            $data = [$hoTen, $gioiTinh, $ngaySinh, $hinh, $maNganh, $id];
    
            $this->studentModel->update($data);
            header("Location: /giuaki");
            exit();
        }
    }
    

    /**
     * Xử lý xóa sinh viên
     */
    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->studentModel->delete($id);
        }
        header("Location: /giuaki");
        exit();
    }
    
}
?>
