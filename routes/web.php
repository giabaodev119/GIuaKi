<?php
require_once __DIR__ . '/../app/controllers/StudentController.php';

$controller = new StudentController();

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
?>
