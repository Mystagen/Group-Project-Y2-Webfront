<div id="myProfileTopBar">
    <img src="../Student View/images/<?=$profilePicture?>" alt="Profile Picture" class="profilePicture">
    <label><?= $firstname . " " . $surname?></label>
    <label><?= $course?></label>
    <label><?= $studentID?></label>
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
        <div class="myProfileModuleAttendance">
            <h3 class="mpmaTitle">{Module Name}</h3>
            <label class="mpmaLabel">Attended:</label>
            <label class="mpmaContent">{x%}</label>
            <label class="mpmaLabel">Missed:</label>
            <label class="mpmaContent">{y%}</label>
        </div>
        <div class="myProfileModuleAttendance">
            <h3 class="mpmaTitle">{Module Name}</h3>
            <label class="mpmaLabel">Attended:</label>
            <label class="mpmaContent">{x%}</label>
            <label class="mpmaLabel">Missed:</label>
            <label class="mpmaContent">{y%}</label>
        </div>
        <div class="myProfileModuleAttendance">
            <h3 class="mpmaTitle">{Module Name}</h3>
            <label class="mpmaLabel">Attended:</label>
            <label class="mpmaContent">{x%}</label>
            <label class="mpmaLabel">Missed:</label>
            <label class="mpmaContent">{y%}</label>
        </div>
        <div class="myProfileModuleAttendance">
            <h3 class="mpmaTitle">{Module Name}</h3>
            <label class="mpmaLabel">Attended:</label>
            <label class="mpmaContent">{x%}</label>
            <label class="mpmaLabel">Missed:</label>
            <label class="mpmaContent">{y%}</label>
        </div>
        <div class="myProfileModuleAttendance">
            <h3 class="mpmaTitle">{Module Name}</h3>
            <label class="mpmaLabel">Attended:</label>
            <label class="mpmaContent">{x%}</label>
            <label class="mpmaLabel">Missed:</label>
            <label class="mpmaContent">{y%}</label>
        </div>
        <div class="myProfileModuleAttendance">
            <h3 class="mpmaTitle">{Module Name}</h3>
            <label class="mpmaLabel">Attended:</label>
            <label class="mpmaContent">{x%}</label>
            <label class="mpmaLabel">Missed:</label>
            <label class="mpmaContent">{y%}</label>
        </div>
    </div>
</div>