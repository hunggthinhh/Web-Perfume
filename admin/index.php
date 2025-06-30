<!DOCTYPE html>
<html lang="vi">
<head>
  <?php 
    $title = "Ben Perfume Admin";
    $csrf_token = ""; // hoặc lấy từ session nếu cần
    include 'parts/head.php'; 
  ?> 
</head>
<body>
  <section class="admin">
    <div class="row-grid">
      <?php include 'parts/sidebar.php'; ?>
      <?php include 'parts/content.php'; ?>
    </div>
  </section>
  <script src="asset/js/scrip.js"></script>
</body>
</html>