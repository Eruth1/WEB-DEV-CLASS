<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Eruth' && $password == 'password123') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit(); // Thêm exit() để dừng kịch bản sau khi chuyển hướng
} else {
    echo "Invalid login. <a href='login.php'>Try again</a>"; // Đổi thành file .php tương ứng của bạn
}
?>