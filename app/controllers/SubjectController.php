<?php
require_once __DIR__ . '/../models/Subject.php';

class SubjectController {
    private $subjectModel;

    public function __construct() {
        $this->subjectModel = new Subject();
    }

    public function showSubjects() {
        $subjects = $this->subjectModel->getAll();
        require_once __DIR__ . '/../views/subjects/index.php';
    }
}
?>
