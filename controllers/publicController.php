<?php

class PublicController {

    private $pdo;
    private $studentAccount;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->studentAccount = new DatabaseTable($this->pdo,'student_accounts','student_id');
    }

    public function home() {
        $title = 'Woodlands University';

        return [
            'template' => 'public_home.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    public function courses() {
        $title = 'Courses';

        return [
            'template' => 'public_courses.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    public function halls() {
        $title = 'Halls';

        return [
            'template' => 'public_hall.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    public function lifeAtWoodlands() {
        $title = 'Life at Woodlands';

        return [
            'template' => 'public_life.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    public function opportunities() {
        $title = 'Opportunities';

        return [
            'template' => 'public_internationalopportunities.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    public function additionalServices() {
        $title = 'Additional Services';

        return [
            'template' => 'public_additionalservices.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    public function internationalStudents() {
        $title = 'International Students';

        return [
            'template' => 'public_internationalinformation.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    public function login() {
        $title = 'Student Login';

        return [
            'template' => 'public_studentlogin.html.php',
            'title' => $title,
            'variables' => ['connection' => $this->studentAccount]
        ];
    }
}