<?php

session_start();

require '../controllers/publicController.php';
require '../controllers/studentController.php';
require '../loadTemplate.php';
require '../databaseConnection.php';

$publicController = new publicController($pdo);
$studentController = new studentController($pdo);

$route = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');

$publicView = true;

if ($route == '' && (!(isset($_SESSION['studentID'])))) {
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
    if (isset($_SESSION['studentID'])) {
        $publicView = false;
        $page = $studentController->home();
    } else {
        $page = $publicController->login();
    }
} else if ($route == '' && (isset($_SESSION['studentID']))) {
    $publicView = false;
    $page = $studentController->home();
} else if ($route == 'student_home' && isset($_SESSION['studentID'])) {
    $publicView = false;
    $page = $studentController->home();
} else if ($route == 'student_diary' && isset($_SESSION['studentID'])) {
    $publicView = false;
    $page = $studentController->diary();
} else if ($route == 'student_modules' && isset($_SESSION['studentID'])) {
    $publicView = false;
    $page = $studentController->modules();
} else if ($route == 'student_timetable' && isset($_SESSION['studentID'])) {
    $publicView = false;
    $page = $studentController->timetable();
} else if ($route == 'student_assignments' && isset($_SESSION['studentID'])) {
    $publicView = false;
    $page = $studentController->assignments();
} else if ($route == 'student_profile' && isset($_SESSION['studentID'])) {
    $publicView = false;
    $page = $studentController->profile();
} else if ($route == 'student_logout' && isset($_SESSION['studentID'])) {
    $publicView = false;
    $page = $studentController->logout();
} else {
    $page = $publicController->home();
}

$content = loadTemplate('../templates/' . $page['template'], $page['variables']);
$title = $page['title'];

if (!($publicView)) {
    require '../templates/student_main.html.php';
} else {
    require  '../templates/public_main.html.php';
}