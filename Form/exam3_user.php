<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:exam3_login.html");
} else {
    echo "Đăng nhập thành công.</br>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
    <?php echo $_SESSION['user']; ?>
    <a href="exam3_logout.php">Logout</a>
</body>
</html>