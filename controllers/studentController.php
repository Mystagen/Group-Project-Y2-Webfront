<?php
require '../databaseTable.php';

class StudentController {

    private $pdo;
    private $student;
    private $course;
    private $address;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->student = new DatabaseTable($this->pdo,'student_records','student_id');
        $this->course = new DatabaseTable($this->pdo,'courses', 'course_code');
        $this->address = new DatabaseTable($this->pdo, 'contact_address', 'address_id');
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
        $studentdata = $this->student->find('student_id', $_SESSION['studentID']);

        if(sizeof($studentdata) > 0) {
            $coursedata = $this->course->find('course_code', $studentdata['course_code']);
            $addressdata = $this->address->find('address_id', $studentdata['address_id']);
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
            'variables' => []
        ];
    }
}