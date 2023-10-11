<?php
session_start();
unset($_SESSION['user']);
header("location:exam3_login.html");
?>