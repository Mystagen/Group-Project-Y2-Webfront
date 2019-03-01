<h1>Student Login</h1>
<form action="./login" method="POST">
    <div>
        <label for="username">Username: </label><input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">Password: </label><input type="password" id="password" name="password">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>

<?php 
    if (isset($_POST['username']) && isset($_POST['username'])) {
        //validation code
        //Sets student id
        $_SESSION['studentID'] = '12345678';
        header('location: student_home');
    }
?>