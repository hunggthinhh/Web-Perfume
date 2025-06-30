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
  <title>Đăng ký</title>
  <style>
    body {font-family: sans-serif; background: linear-gradient(#a1c4fd, #c2e9fb); display:flex;justify-content:center;align-items:center;height:100vh;}
    .register-container {background:#fff;padding:40px;border-radius:10px;box-shadow:0 0 20px rgba(0,0,0,0.1);width:100%;max-width:400px;}
    .register-container h2 {text-align:center;margin-bottom:30px;color:#333;}
    .register-container input {width:100%;padding:12px 15px;margin-bottom:20px;border:1px solid #ccc;border-radius:5px;font-size:16px;}
    .register-container button {width:100%;padding:14px;border:none;border-radius:5px;background-color:#4f8bd9;color:#fff;font-size:18px;cursor:pointer;transition:background-color 0.3s;}
    .register-container button:hover {background-color:#3c6fb9;}
    .error-message {color:red;text-align:center;margin-bottom:15px;}
    .success-message {color:green;text-align:center;margin-bottom:15px;}
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Đăng ký</h2>
    <?php if (isset($_SESSION['register_error'])): ?>
      <div class="error-message"><?php echo htmlspecialchars($_SESSION['register_error']); unset($_SESSION['register_error']); ?></div>
    <?php endif; ?>
    <?php if (isset($_SESSION['register_success'])): ?>
      <div class="success-message"><?php echo htmlspecialchars($_SESSION['register_success']); unset($_SESSION['register_success']); ?></div>
    <?php endif; ?>
    <form action="check_register.php" method="POST">
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
      <input type="text" name="username" placeholder="Tên đăng nhập" required>
      <input type="password" name="password" placeholder="Mật khẩu" required>
      <input type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
      <button type="submit">Đăng ký</button>
    </form>
    <p style="text-align:center;"><a href="login.php">Đã có tài khoản?</a></p>
  </div>
</body>
</html>