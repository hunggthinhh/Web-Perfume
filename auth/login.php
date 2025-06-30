<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
  <!-- <link rel="stylesheet" href="asset/css/style.css" /> -->

  <style>
    body {font-family:sans-serif;background:linear-gradient(#ff9a9e,#fad0c4);display:flex;justify-content:center;align-items:center;height:100vh;}
    .login-container {background:#fff;padding:40px;border-radius:10px;box-shadow:0 0 20px rgba(0,0,0,0.1);width:100%;max-width:400px;}
    .login-container h2 {text-align:center;margin-bottom:30px;color:#333;}
    .login-container input {width:100%;padding:12px 15px;margin-bottom:20px;border:1px solid #ccc;border-radius:5px;font-size:16px;}
    .login-container button {width:100%;padding:14px;border:none;border-radius:5px;background-color:#d94f4f;color:#fff;font-size:18px;cursor:pointer;transition:background-color 0.3s;}
    .login-container button:hover {background-color:#b93c3c;}
    .error-message {color:red;text-align:center;margin-bottom:15px;}
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Đăng nhập</h2>
    <?php if (isset($_SESSION['error'])): ?>
      <div class="error-message"><?php echo htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?></div>
    <?php endif; ?>
    <form action="check_login.php" method="POST">
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
      <input type="text" name="username" placeholder="Tên đăng nhập" required>
      <input type="password" name="password" placeholder="Mật khẩu" required>
      <button type="submit">Đăng nhập</button>
    </form>
    <p style="text-align:center;"><a href="register.php">Chưa có tài khoản? Đăng ký</a></p>
  </div>
</body>
</html>