<?php
session_start();
require 'db.php';

// CSRF check
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
  $_SESSION['error'] = "CSRF token không hợp lệ!";
  header("Location: login.php");
  exit;
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Kiểm tra user trong DB
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows == 1) {
  $stmt->bind_result($id, $hash);
  $stmt->fetch();
  if (password_verify($password, $hash)) {
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
    exit;
  }
}
$_SESSION['error'] = "Tên đăng nhập hoặc mật khẩu không đúng!";
header("Location: login.php");
exit;