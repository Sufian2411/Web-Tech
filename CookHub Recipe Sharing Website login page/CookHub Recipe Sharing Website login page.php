<?php
// Hardcoded username & password
$valid_user = "admin";
$valid_pass = "1234";

// Check form submission
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $valid_user && $password === $valid_pass){
        echo "<h2>Login Successful! Welcome to CookHub, $username.</h2>";
    } else {
        echo "<h2>Invalid Username or Password.</h2>";
        echo '<a href="login.html">Try Again</a>';
    }
} else {
    echo "Please submit the form.";
}
?>
