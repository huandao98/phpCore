<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
    if ($username == 'admin' && $password == '123') {
        $_SESSION['user'] = $username;
        header("location:exam3_user.php");
    } else {
        echo "incorrect username and password";
        require "exam3_login.html";
    }

?>