<form action="./" method="POST" id="backToHome">
    <h1>You have been logged out</h1>
    <input type="submit" name="submit" value="Back to Home" >
</form>

<?php 
    unset($_SESSION['studentID']);
?>