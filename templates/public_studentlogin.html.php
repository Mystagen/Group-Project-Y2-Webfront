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
    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        $loginResult = $connection->find('username', $_POST['username']);
        
        if ($loginResult[0]['password'] == $_POST['password']) {
            $_SESSION['studentID'] = $loginResult[0]['student_id'];
            header('location: student_home');
        } else {
            echo "<h3>Incorrect username or password";
        }
    }
?>