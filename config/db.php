<?php
$host = "localhost";
$user = "root";
$pass = ""; // đổi theo mật khẩu của bạn
$dbname = "web_perfume";

// Kết nối database
$conn = new mysqli($host, $user, $pass, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>