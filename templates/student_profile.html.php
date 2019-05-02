<div id="myProfileTopBar">
    <img src="../Student View/images/<?=$profilePicture?>" alt="Profile Picture" class="profilePicture">
    <label><?="Name: " . $firstname . " " . $surname?></label>
    <label><?="Course: " . $course?></label>
    <label><?="Student ID: " . $studentID?></label>
</div>
<div id="myProfilePersonalDetails">
    <h3>Personal Details</h3>
    <div id="r1">
        <label class="mppdLabel">Address:</label>
        <label class="mppdContent"><?=$address['house']?><br>
            <?=$address['street']?><br>
            <?=$address['city']?><br>
            <?=$address['county']?><br>
            <?=$address['postcode']?><br>
        </label>
    </div>
    <div id="r2">
        <label class="mppdLabel">Contact Number:</label>
        <label class="mppdContent"><?=$phone?></label>
    </div>
    <div id="r3">
        <label class="mppdLabel">Email:</label>
        <label class="mppdContent"><?=$email?></label>
    </div>
</div>
<div id="myProfileAttendance">
    <h3>Attendance</h3>
    <div id="moduleAttendanceContainer">
        <?php
        for ($i = 0; $i < sizeof($modules); $i++) {
            echo '<div class="myProfileModuleAttendance">';
                echo '<h3 class="mpmaTitle">' . $modules[$i] . '</h3>';
                echo '<label class="mpmaLabel">Attended:</label>';
                echo '<label class="mpmaContent">' . $attendance[$i][0] . '</label>';
                echo '<label class="mpmaLabel">Missed:</label>';
                echo '<label class="mpmaContent">' . ($attendance[$i][1] - $attendance[$i][0]) . '</label>';
            echo '</div>';
        }
        ?>
    </div>
</div>