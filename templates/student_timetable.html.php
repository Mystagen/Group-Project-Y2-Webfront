<label class="selector">
</label>
<div class="sideMenu" id="timetableSideMenu">
    <label class="sideMenuElement" id="timetableViewAElement">
        <img src="/Student View/images/timetableView1.png" alt="View A">
        <input id="timetableViewAButton" type="button"></input>
        <label>Simple</label>
    </label>
    <label class="sideMenuElement" id="timetableViewBElement">
        <img src="/Student View/images/timetableView2.png" alt="View B">
        <input id="timetableViewBButton" type="button"></input>
        <label>Table</label>
    </label>
</div>

<div id="timetableViewADiv">
    <div class="viewAElement" id="viewAMonday">
        <label class="dayName">Monday</label>
        <div class="timetableViewAContent">
            <?php 
            for ($i = 0; $i < sizeof($timetable['monday']); $i++) {
                if ($i == 0) {
                    $timeKey = '09:00:00';
                } else {
                    $timeKey = (9+$i) . ':00:00';
                }
                if ($timetable['monday'][$timeKey] != '') {
                    echo '<label>' . $timeKey . ' | ' . $timetable['monday'][$timeKey] . '</label>';
                }
            }
            ?>
        </div>
    </div>
    <div class="viewAElement" id="viewATuesday">
        <label class="dayName">Tuesday</label>
        <div class="timetableViewAContent">
            <?php 
            for ($i = 0; $i < sizeof($timetable['tuesday']); $i++) {
                if ($i == 0) {
                    $timeKey = '09:00:00';
                } else {
                    $timeKey = (9+$i) . ':00:00';
                }
                if ($timetable['tuesday'][$timeKey] != '') {
                    echo '<label>' . $timeKey . ' | ' . $timetable['tuesday'][$timeKey] . '</label>';
                }
            }
            ?>
        </div>
    </div>
    <div class="viewAElement" id="viewAWednesday">
        <label class="dayName">Wednesday</label>
        <div class="timetableViewAContent">
            <?php 
            for ($i = 0; $i < sizeof($timetable['wednesday']); $i++) {
                if ($i == 0) {
                    $timeKey = '09:00:00';
                } else {
                    $timeKey = (9+$i) . ':00:00';
                }
                if ($timetable['wednesday'][$timeKey] != '') {
                    echo '<label>' . $timeKey . ' | ' . $timetable['wednesday'][$timeKey] . '</label>';
                }
            }
            ?>
        </div>
    </div>
    <div class="viewAElement" id="viewAThursday">
        <label class="dayName">Thursday</label>
        <div class="timetableViewAContent">
            <?php 
            for ($i = 0; $i < sizeof($timetable['thursday']); $i++) {
                if ($i == 0) {
                    $timeKey = '09:00:00';
                } else {
                    $timeKey = (9+$i) . ':00:00';
                }
                if ($timetable['thursday'][$timeKey] != '') {
                    echo '<label>' . $timeKey . ' | ' . $timetable['thursday'][$timeKey] . '</label>';
                }
            }
            ?>
        </div>
    </div>
    <div class="viewAElement" id="viewAFriday">
        <label class="dayName">Friday</label>
        <div class="timetableViewAContent">
            <?php 
            for ($i = 0; $i < sizeof($timetable['friday']); $i++) {
                if ($i == 0) {
                    $timeKey = '09:00:00';
                } else {
                    $timeKey = (9+$i) . ':00:00';
                }
                if ($timetable['friday'][$timeKey] != '') {
                    echo '<label>' . $timeKey . ' | ' . $timetable['friday'][$timeKey] . '</label>';
                }
            }
            ?>
        </div>
    </div>
</div>

<div id="timetableViewBDiv">
    <table>
        <tr>
            <th></th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <?php 
        for ($i = 0; $i < 12; $i++) {
            if ($i == 0) {
                $timeKey = '09:00:00';
            } else {
                $timeKey = (9+$i) . ':00:00';
            }
            echo '<tr>';
                echo '<td class="tvBtime">' . $timeKey . '</td>';
                echo '<td>' . $timetable['monday'][$timeKey] . '</td>';
                echo '<td>' . $timetable['tuesday'][$timeKey] . '</td>';
                echo '<td>' . $timetable['wednesday'][$timeKey] . '</td>';
                echo '<td>' . $timetable['thursday'][$timeKey] . '</td>';
                echo '<td>' . $timetable['friday'][$timeKey] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>