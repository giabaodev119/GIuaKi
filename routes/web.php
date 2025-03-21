<?php
require_once __DIR__ . '/../app/controllers/StudentController.php';
require_once __DIR__ . '/../app/controllers/SubjectController.php';

$controller = new StudentController();
$subjectController = new SubjectController();

$action = $_GET['action'] ?? 'index';

if ($action == 'index') {
    $controller->index();
} elseif ($action == 'create') {
    $controller->create();
} elseif ($action == 'store') {
    $controller->store();
} elseif ($action == 'edit') {
    $controller->edit($_GET['id']);
} elseif ($action == 'update') {
    $controller->update($_GET['id']);
} elseif ($action == 'delete') {
    $controller->delete($_GET['id']);
}
if ($action == 'show') {
    $controller->show();
}

if ($action == 'subjects') {
    $subjectController->showSubjects();
}
if ($action == 'login') {
    $controller->showLoginForm();
} elseif ($action == 'authenticate') {
    $controller->authenticate();
} elseif ($action == 'logout') {
    $controller->logout();
}

?>
