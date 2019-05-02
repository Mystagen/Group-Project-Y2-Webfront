<label class="selectorAssignment">
</label>
<div class="sideMenu" id="assignmentsSideMenu">
    <?php
    $idCounter = 0;
    for ($i = 0; $i < sizeof($assignments); $i++) {
        for ($x = 0; $x < sizeof($assignments[$i]); $x++) {
            echo '<label class="sideMenuElement">';
                echo '<label>' . $assignments[$i][$x]['title'] .'</label>';
                echo '<input class="assignmentButton" id="assignmentbutton' . $idCounter . '"type="button"></input>';
            echo '</label>';
            $idCounter++;
        }
    }
    ?>
</div>

<?php
$idCounter = 0;
for ($i = 0; $i < sizeof($assignments); $i++) {
    for ($x = 0; $x < sizeof($assignments[$i]); $x++) {?>
        <div class="assignmentView" id = "<?="assignmentpanel" . $idCounter?>">
            <div class="assignmentDetails">
                <h1><?=$assignments[$i][$x]['title']?></h1>
                <label class="assignmentDue">Due: <?=$assignments[$i][$x]['due_date']?></label>
                <label class="assignmentModule">Module: <?=$assignments[$i][$x]['module']?></label>
                <p class="assignmentInformation">Details: <?=$assignments[$i][$x]['description']?></p>
            </div>
            <div class="assignmentProvidedFiles">
                <label>Resources Provided:</label>
            </div>
            <input class="assignmentSubmitButton" type="button" value="Submit Assignment">
            <div class="assignmentUploadedFiles">
                <label>Uploaded Files:</label>
            </div>
            <div class="assignmentUploadButton">
                <form action="assignments.html" method="POST">
                    <input type="file" value="Choose File">
                    <input class="assignmentUploadSubmit" type="submit" value="Upload">
                </form>
            </div>
        
        </div>
<?php
        $idCounter++;
    }
}
?>