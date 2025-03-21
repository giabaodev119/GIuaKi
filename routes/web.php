<?php
require_once __DIR__ . '/../app/controllers/StudentController.php';
require_once __DIR__ . '/../app/controllers/SubjectController.php';
require_once __DIR__ . '/../app/controllers/RegistrationController.php';

$studentController = new StudentController();
$subjectController = new SubjectController();
$registrationController = new RegistrationController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $studentController->index();
        break;
    case 'create':
        $studentController->create();
        break;
    case 'store':
        $studentController->store();
        break;
    case 'edit':
        $studentController->edit($_GET['id']);
        break;
    case 'update':
        $studentController->update($_GET['id']);
        break;
    case 'delete':
        $studentController->delete($_GET['id']);
        break;
    case 'show':
        $studentController->show();
        break;
    case 'subjects':
        $subjectController->showSubjects();
        break;
    case 'login':
        $studentController->showLoginForm();
        break;
    case 'authenticate':
        $studentController->authenticate();
        break;
    case 'logout':
        $studentController->logout();
        break;
    case 'register_subjects':
        $registrationController->showRegistrationPage();
        break;
    case 'add_subject':
        $registrationController->addSubjectToCart();
        break;
    case 'remove_subject':
        $registrationController->removeSubjectFromCart();
        break;
    case 'clear_cart':
        $registrationController->clearCart();
        break;
    case 'save_registration':
        $registrationController->saveRegistration();
        break;
    default:
        echo "404 - Không tìm thấy trang!";
        break;
}


?>
