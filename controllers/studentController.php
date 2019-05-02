<?php
require '../databaseTable.php';

class StudentController {

    private $pdo;
    private $student;
    private $course;
    private $address;
    private $modules;
    private $courseModules;
    private $totalAttendance;
    private $timetableModules;
    private $assignmentTable;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        $this->student = new DatabaseTable($this->pdo,'student_records','student_id');
        $this->course = new DatabaseTable($this->pdo,'courses', 'course_code');
        $this->address = new DatabaseTable($this->pdo, 'contact_address', 'address_id');
        $this->modules = new DatabaseTable($this->pdo, 'modules', 'module_code');
        $this->courseModules = new DatabaseTable($this->pdo, 'course_modules', 'course_code');
        $this->totalAttendance = new DatabaseTable($this->pdo, 'total_attendance', 'student_id');
        $this->timetableModules = new DatabaseTable($this->pdo, 'timetables_modules', 'timetable_id');
        $this->assignmentTable = new DatabaseTable($this->pdo, 'assignments', 'assignment_id');
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
            $assignmentData = $this->assignmentTable->find('module_code', $coursedata[$i]['module_code']);
            $assignmentDueDate = [];
            $assignmentTitle = [];
            if (sizeof($assignmentData) > 0) {
                for ($x = 0; $x < sizeof($assignmentData); $x++) {
                    array_push($assignmentDueDate, '');
                    array_push($assignmentTitle, $assignmentData[$x]['title']);
                }
            } else {
                array_push($assignmentDueDate, 'N/A');
                array_push($assignmentTitle, 'No assignments have been added');
            }
            $moduleInformation[$i] = [
                'module_code' => $moduledata['module_code'],
                'title' => $moduledata['title'],
                'description' => $moduledata['description'],
                'year' => $moduledata['year'],
                'credit' => $moduledata['credit'],
                'assignment' => [
                    'assignment_due_date' => $assignmentDueDate,
                    'assignment_title' => $assignmentTitle
                ]
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
        $modules = $this->courseModules->find('course_code', $studentdata['course_code']);
        $days = [
            'monday' => [
                '09:00:00' => '',
                '10:00:00' => '',
                '11:00:00' => '',
                '12:00:00' => '',
                '13:00:00' => '',
                '14:00:00' => '',
                '15:00:00' => '',
                '16:00:00' => '',
                '17:00:00' => '',
                '18:00:00' => '',
                '19:00:00' => '',
                '20:00:00' => ''
            ],
            'tuesday' => [
                '09:00:00' => '',
                '10:00:00' => '',
                '11:00:00' => '',
                '12:00:00' => '',
                '13:00:00' => '',
                '14:00:00' => '',
                '15:00:00' => '',
                '16:00:00' => '',
                '17:00:00' => '',
                '18:00:00' => '',
                '19:00:00' => '',
                '20:00:00' => ''
            ],
            'wednesday' => [
                '09:00:00' => '',
                '10:00:00' => '',
                '11:00:00' => '',
                '12:00:00' => '',
                '13:00:00' => '',
                '14:00:00' => '',
                '15:00:00' => '',
                '16:00:00' => '',
                '17:00:00' => '',
                '18:00:00' => '',
                '19:00:00' => '',
                '20:00:00' => ''
            ],
            'thursday' => [
                '09:00:00' => '',
                '10:00:00' => '',
                '11:00:00' => '',
                '12:00:00' => '',
                '13:00:00' => '',
                '14:00:00' => '',
                '15:00:00' => '',
                '16:00:00' => '',
                '17:00:00' => '',
                '18:00:00' => '',
                '19:00:00' => '',
                '20:00:00' => ''
            ],
            'friday' => [
                '09:00:00' => '',
                '10:00:00' => '',
                '11:00:00' => '',
                '12:00:00' => '',
                '13:00:00' => '',
                '14:00:00' => '',
                '15:00:00' => '',
                '16:00:00' => '',
                '17:00:00' => '',
                '18:00:00' => '',
                '19:00:00' => '',
                '20:00:00' => ''
                ]
        ];

        for ($i = 0; $i < sizeof($modules); $i++) {
            $timetableData = $this->timetableModules->find('module_code', $modules[$i]['module_code']);

            for ($x = 0; $x < sizeof($timetableData); $x++) {
                switch ($timetableData[$x]['week_day']) {
                    case "MONDAY":
                        $days['monday'][$timetableData[$x]['time']] = $timetableData[$x]['module_code'];
                        break;
                    case "TUESDAY":
                        $days['tuesday'][$timetableData[$x]['time']] = $timetableData[$x]['module_code'];
                        break;
                    case "WEDNESDAY":
                        $days['wednesday'][$timetableData[$x]['time']] = $timetableData[$x]['module_code'];
                        break;
                    case "THURSDAY":
                        $days['thursday'][$timetableData[$x]['time']] = $timetableData[$x]['module_code'];
                        break;
                    case "FRIDAY":
                        $days['friday'][$timetableData[$x]['time']] = $timetableData[$x]['module_code'];
                        break;
                }
            }
        }

        return [
            'template' => 'student_timetable.html.php',
            'title' => $title,
            'variables' => [
                'firstname' => $studentdata['firstname'],
                'surname' => $studentdata['surname'],
                'timetable' => $days
            ]
        ];
    }

    function assignments() {
        $title = 'Assignments';
        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];

        $coursedata = $this->courseModules->find('course_code', $studentdata['course_code']);
        $assignmentInformation = [];
        for ($i = 0; $i < sizeof($coursedata); $i++) {
            $moduledata = $this->modules->find('module_code', $coursedata[$i]['module_code'])[0];
            $assignmentData = $this->assignmentTable->find('module_code', $coursedata[$i]['module_code']);

            if (sizeof($assignmentData) > 0) {
                for ($x = 0; $x < sizeof($assignmentData); $x++) {
                    $assignmentModule = $moduledata['title'] . ' - ' . $moduledata['module_code'];
                    $assignmentTitle = $assignmentData[$x]['title'];
                    $assignmentDescription = $assignmentData[$x]['description'];
                    $assignmentWeighting = $assignmentData[$x]['weighting'];
                    $assignmentDueDate = '';
                    
                    $assignmentInformation[$i][$x] = [
                        'title' => $assignmentTitle,
                        'description' => $assignmentDescription,
                        'due_date' => $assignmentDueDate,
                        'weighting' => $assignmentWeighting,
                        'module' => $assignmentModule
                    ];
                }
            }
        }


        return [
            'template' => 'student_assignments.html.php',
            'title' => $title,
            'variables' => [
                'firstname' => $studentdata['firstname'],
                'surname' => $studentdata['surname'],
                'assignments' => $assignmentInformation
            ]
        ];
    }

    function profile() {
        $title = 'My Profile';
        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];

        if(sizeof($studentdata) > 0) {
            $coursedata = $this->course->find('course_code', $studentdata['course_code'])[0];
            $addressdata = $this->address->find('address_id', $studentdata['address_id'])[0];
            $modulesInCourse = $this->courseModules->find('course_code', $studentdata['course_code']);
            $modules = [];
            $attendance = [];

            for ($i = 0; $i < sizeof($modulesInCourse); $i++) {
                $moduleList = $this->modules->find('module_code', $modulesInCourse[$i]['module_code']);
                $moduleAttendance = $this->totalAttendance->find('student_id', $_SESSION['studentID']);
                for ($x = 0; $x < sizeof($moduleAttendance); $x++) {
                    if ($moduleAttendance[$x]['module_code'] == $modulesInCourse[$i]['module_code']) {
                        array_push($attendance, [$moduleAttendance[$x]['attended_classes'], $moduleAttendance[$x]['total_number_of_classes']]);
                    }
                }
                array_push($modules, $moduleList[0]['title']);
            }
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
                    'phone' => $studentdata['contact_phone'],
                    'modules' => $modules,
                    'attendance' => $attendance
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

        $studentdata = $this->student->find('student_id', $_SESSION['studentID'])[0];
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