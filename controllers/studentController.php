<?php
require '../databaseTable.php';

class StudentController {

    private $pdo;
    private $student;
    private $course;
    private $address;
    private $modules;
    private $courseModules;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->student = new DatabaseTable($this->pdo,'student_records','student_id');
        $this->course = new DatabaseTable($this->pdo,'courses', 'course_code');
        $this->address = new DatabaseTable($this->pdo, 'contact_address', 'address_id');
        $this->modules = new DatabaseTable($this->pdo, 'modules', 'module_code');
        $this->courseModules = new DatabaseTable($this->pdo, 'course_modules', 'course_code');
    }

    function home() {
        $title = 'Dashboard';
        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];

        return [
            'template' => 'student_home.html.php',
            'title' => $title,
            'variables' => [
                'firstname' => $studentdata['firstname'],
                'surname' => $studentdata['surname']
            ]
        ];
    }

    function diary() {
        $title = 'Diary';
        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];

        return [
            'template' => 'student_diary.html.php',
            'title' => $title,
            'variables' => [
                'firstname' => $studentdata['firstname'],
                'surname' => $studentdata['surname']
            ]
        ];
    }

    function modules() {
        $title = 'Modules';
        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];
        $coursedata = $this->courseModules->find('course_code', $studentdata['course_code']);
        $moduleInformation = [];
        for ($i = 0; $i < sizeof($coursedata); $i++) {
            $moduledata = $this->modules->find('module_code', $coursedata[$i]['module_code'])[0];
            $moduleInformation[$i] = [
                'module_code' => $moduledata['module_code'],
                'title' => $moduledata['title'],
                'description' => $moduledata['description'],
                'year' => $moduledata['year'],
                'credit' => $moduledata['credit']
            ];
        }

        return [
            'template' => 'student_modules.html.php',
            'title' => $title,
            'variables' => [
                'firstname' => $studentdata['firstname'],
                'surname' => $studentdata['surname'],
                'moduleInformation' => $moduleInformation
            ]
        ];
    }

    function timetable() {
        $title = 'Timetable';
        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];

        return [
            'template' => 'student_timetable.html.php',
            'title' => $title,
            'variables' => [
                'firstname' => $studentdata['firstname'],
                'surname' => $studentdata['surname']
            ]
        ];
    }

    function assignments() {
        $title = 'Assignments';
        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];


        return [
            'template' => 'student_assignments.html.php',
            'title' => $title,
            'variables' => [
                'firstname' => $studentdata['firstname'],
                'surname' => $studentdata['surname']
            ]
        ];
    }

    function profile() {
        $title = 'My Profile';
        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];

        if(sizeof($studentdata) > 0) {
            $coursedata = $this->course->find('course_code', $studentdata['course_code'])[0];
            $addressdata = $this->address->find('address_id', $studentdata['address_id'])[0];
            return [
                'template' => 'student_profile.html.php',
                'title' => $title,
                'variables' => [
                    'firstname' => $studentdata['firstname'],
                    'surname' => $studentdata['surname'],
                    'course' => $coursedata['course_title'],
                    'studentID' => $_SESSION['studentID'],
                    'profilePicture' => $studentdata['profilePicture'],
                    'address' => ['house' => $addressdata['house'],
                            'street' => $addressdata['street'],
                            'city' => $addressdata['city'],
                            'county' => $addressdata['county'],
                            'postcode' => $addressdata['postcode']
                    ],
                    'email' => $studentdata['contact_email'],
                    'phone' => $studentdata['contact_phone']
                ]
            ];
        } else { 
            return [
                'template' => 'student_profile.html.php',
                'title' => $title,
                'variables' => [
                    'firstname' => "Null",
                    'surname' => "Null",
                    'course' => "Null",
                    'studentID' => "Null",
                    'profilePicture' => "blankProfilePicture.jpg",
                    'address' => ['house' => "Null",
                            'street' => "Null",
                            'city' => "Null",
                            'county' => "Null",
                            'postcode' => "Null"
                    ],
                    'email' => "Null",
                    'phone' => "Null"
                ]
            ];
        }
    }

    function logout() {
        $title = 'Logout';

        return [
            'template' => 'student_logout.html.php',
            'title' => $title,
            'variables' => [
                'firstname' => $studentdata['firstname'],
                'surname' => $studentdata['surname']
            ]
        ];
    }
}