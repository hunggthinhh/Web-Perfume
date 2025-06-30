<?php
session_start();
require 'db.php';

// CSRF check
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
  $_SESSION['register_error'] = "CSRF token không hợp lệ!";
  header("Location: register.php");
  exit;
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);

// Kiểm tra hợp lệ
if ($password !== $confirm_password) {
  $_SESSION['register_error'] = "Mật khẩu không khớp!";
  header("Location: register.php");
  exit;
}
if (strlen($username) < 4 || strlen($password) < 6) {
  $_SESSION['register_error'] = "Tên đăng nhập >3 ký tự, mật khẩu >5 ký tự.";
  header("Location: register.php");
  exit;
}

// Kiểm tra username đã tồn tại
$stmt = $conn->prepare("SELECT id FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
  $_SESSION['register_error'] = "Tên đăng nhập đã tồn tại!";
  header("Location: register.php");
  exit;
}

// Thêm user mới
$hash = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hash);
if ($stmt->execute()) {
  $_SESSION['register_success'] = "Đăng ký thành công! Bạn có thể đăng nhập.";
  header("Location: register.php");
  exit;
} else {
  $_SESSION['register_error'] = "Đăng ký thất bại. Vui lòng thử lại!";
  header("Location: register.php");
  exit;
}