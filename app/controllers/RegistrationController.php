<?php
require_once __DIR__ . '/../models/Subject.php';
require_once __DIR__ . '/../models/Registration.php';

class RegistrationController {
    private $subjectModel;
    private $registrationModel;

    public function __construct() {
        $this->subjectModel = new Subject();
        $this->registrationModel = new Registration();
    }

    public function showRegistrationPage() {
        $subjects = $this->subjectModel->getAll();
        $cart = $_SESSION["cart"] ?? [];

        require_once __DIR__ . '/../views/subjects/register.php';
    }

    public function addSubjectToCart() {
        $maHP = $_GET["MaHP"] ?? null;
        if ($maHP) {
            $_SESSION["cart"][$maHP] = $this->subjectModel->getById($maHP);
        }
        header("Location: index.php?action=register_subjects");
        exit();
    }

    public function removeSubjectFromCart() {
        $maHP = $_GET["MaHP"] ?? null;
        if ($maHP && isset($_SESSION["cart"][$maHP])) {
            unset($_SESSION["cart"][$maHP]);
        }
        header("Location: index.php?action=register_subjects");
        exit();
    }

    public function clearCart() {
        unset($_SESSION["cart"]);
        header("Location: index.php?action=register_subjects");
        exit();
    }

    public function saveRegistration() {
        if (!isset($_SESSION["student"])) {
            header("Location: index.php?action=login");
            exit();
        }

        $maSV = $_SESSION["student"]["MaSV"];
        $subjects = $_SESSION["cart"] ?? [];

        if (empty($subjects)) {
            header("Location: index.php?action=register_subjects");
            exit();
        }

        $maDK = $this->registrationModel->createRegistration($maSV);

        foreach ($subjects as $subject) {
            $this->registrationModel->addSubjectToRegistration($maDK, $subject["MaHP"]);
        }

        unset($_SESSION["cart"]);
        header("Location: index.php?action=register_subjects");
        exit();
    }
}
?>
