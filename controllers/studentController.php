<?php

class StudentController {
    private $table;

    public function __construct($table) {
        $this->table = $table;
    }

    function home() {
        $title = 'Dashboard';

        return [
            'template' => 'student_home.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    function diary() {
        $title = 'Diary';

        return [
            'template' => 'student_diary.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    function modules() {
        $title = 'Modules';

        return [
            'template' => 'student_modules.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    function timetable() {
        $title = 'Timetable';

        return [
            'template' => 'student_timetable.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    function assignments() {
        $title = 'Assignments';

        return [
            'template' => 'student_assignments.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    function profile() {
        $title = 'My Profile';

        return [
            'template' => 'student_profile.html.php',
            'title' => $title,
            'variables' => []
        ];
    }

    function logout() {
        $title = 'Logout';

        return [
            'template' => 'student_home.html.php',
            'title' => $title,
            'variables' => []
        ];
    }
}