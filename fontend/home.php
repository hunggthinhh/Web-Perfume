<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="asset/css/style.css">
  
  <title>Ben Perfume - Trang chủ</title>
</head>
<body>
  <?php include 'parts/header.php'; ?>
  <?php include 'parts/slider.php'; ?>

  <?php
    include 'parts/hot-products.php';
    include 'parts/hot-products-girl.php';
    include 'parts/hot-products-boy.php';
  ?>
    <?php include 'parts/brand-section.php'; ?>
    
  <?php include 'parts/footer.php'; ?>
  <script src="asset/js/scrip.js"></script>
</body>
</html>