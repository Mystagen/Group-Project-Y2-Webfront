<label class="selectorWide">
</label>

<div class="sideMenu" id="modulesSideMenu">
    <?php
    for ($i=0; $i<sizeof($moduleInformation); $i++) {
        echo "<label class=\"sideMenuElement\">";
            echo "<label>" . $moduleInformation[$i]['title'] . "</label>";
            echo "<input class=\"moduleButton\" id=\"modulebutton" . $i . "\" type=\"button\"></input>";
        echo "</label>";
    }
    ?>
</div>

<?php
for ($i=0; $i<sizeof($moduleInformation); $i++) { ?>
    <div class="moduleView" id = "<?="modulepanel" . $i?>" >
        <div class="moduleName">
            <h1><?=$moduleInformation[$i]['title']?></h1>
        </div>
        <div class="moduleDescription">
            <p><?=$moduleInformation[$i]['description']?></p>
        </div>
        <div class="moduleNotesAndTopics">
            <div class="moduleNoteDownload">
                <label>Topic 1</label>
                <br>
                <a href="#">Download</a>
            </div>
            <div class="moduleNoteDownload">
                <label>Topic 2</label>
                <br>
                <a href="#">Download</a>
            </div>
            <div class="moduleTest">
                <label>Test 1</label>
                <br>
                <a href="#">Begin</a>
            </div>
        </div>
        <div class="moduleLecturer">
            <label class="mlname">{Lecturer Name}</label>
            <label class="mlemail">{email}</label>
            <img src="#" alt="Lecturer Picture">
        </div>
        <div class="moduleAssignments">
            <label class="maTitle">Assignments</label>
            <div class="moduleAssignmentDetails">
                <label>{Assignment Title}</label>
                <label>{Due Date}</label>
            </div>
            <div class="moduleAssignmentDetails">
                <label>{Assignment Title}</label>
                <label>{Due Date}</label>
            </div>
        </div>

    </div>
<?php
}
?>