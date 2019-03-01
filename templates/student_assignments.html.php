<label class="selectorAssignment">
</label>
<div class="sideMenu" id="assignmentsSideMenu">
    <label class="sideMenuElement">
        <label>Assignment 1</label>
        <input class="assignmentButton" type="button"></input>
    </label>
    <label class="sideMenuElement">
        <label>Assignment 2</label>
        <input class="assignmentButton" type="button"></input>
    </label>
    <label class="sideMenuElement">
        <label>Assignment 3</label>
        <input class="assignmentButton" type="button"></input>
    </label>
    <label class="sideMenuElement">
        <label>Assignment 4</label>
        <input class="assignmentButton" type="button"></input>
    </label>
    <label class="sideMenuElement">
        <label>Assignment 5</label>
        <input class="assignmentButton" type="button"></input>
    </label>
    <label class="sideMenuElement">
        <label>Assignment 6</label>
        <input class="assignmentButton" type="button"></input>
    </label>
</div>

<div class="assignmentView">
    <div class="assignmentDetails">
        <h1>{Assignment Name}</h1>
        <label class="assignmentDue">Due: {Due Date}</label>
        <label class="assignmentModule">Module: {Module Name}</label>
        <p class="assignmentInformation">Details: {Assignment Details}</p>
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