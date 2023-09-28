<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.html");
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
    <a href="logout.php">Logout</a>
</body>
</html>