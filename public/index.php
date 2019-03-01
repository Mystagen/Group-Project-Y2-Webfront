<?php

session_start();

require '../controllers/publicController.php';
require '../controllers/studentController.php';
require '../databaseTable.php';
require '../loadTemplate.php';

$table = new DatabaseTable(3,4,5);

$publicController = new publicController($table);
$studentController = new studentController($table);

$route = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');

if ($route == '') {
    $page = $publicController->home();
} else if ($route == 'courses') {
    $page = $publicController->courses();
} else if ($route == 'halls') {
    $page = $publicController->halls();
} else if ($route ==  'lifeatwoodlands') {
    $page = $publicController->lifeAtWoodlands();
} else if ($route == 'internationalopportunities') {
    $page = $publicController->opportunities();
} else if ($route == 'additionalservices') {
    $page = $publicController->additionalServices();
} else if ($route == 'internationalinformation') {
    $page = $publicController->internationalStudents();
} else if ($route == 'login') {
    $page = $publicController->login();
} else if ($route == 'student_home' && isset($_SESSION['studentID'])) {
    $page = $studentController->home();
} else if ($route == 'student_diary' && isset($_SESSION['studentID'])) {
    $page = $studentController->diary();
} else if ($route == 'student_modules' && isset($_SESSION['studentID'])) {
    $page = $studentController->modules();
} else if ($route == 'student_timetable' && isset($_SESSION['studentID'])) {
    $page = $studentController->timetable();
} else if ($route == 'student_assignments' && isset($_SESSION['studentID'])) {
    $page = $studentController->assignments();
} else if ($route == 'student_profile' && isset($_SESSION['studentID'])) {
    $page = $studentController->profile();
} else if ($route == 'student_logout' && isset($_SESSION['studentID'])) {
    $page = $studentController->logout();
}

$content = loadTemplate('../templates/' . $page['template'], $page['variables']);
$title = $page['title'];

if (isset($_SESSION['studentID'])) {
    require '../templates/student_main.html.php';
} else {
    require  '../templates/public_main.html.php';
}