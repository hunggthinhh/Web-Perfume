<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="asset/css/style.css">
  <title>Ben Perfume - Trang chủ</title>
</head>
<style>
  header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
  background: #fff;
  margin: 0;
  padding: 0;
  box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}
body {
  padding-top: 90px; /* Đúng bằng chiều cao của header */
}
</style>
<body>
  <?php include 'parts/header.php'; ?>
    
  <?php include 'bar/brand.php'; ?>

  <!-- <main style="min-height:30vh;">
  </main> -->
  <?php include 'parts/footer.php'; ?>
  <script src="asset/js/scrip.js"></script>
</body>
</html>