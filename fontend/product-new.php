<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="asset/css/style.css">
  <title>Ben Perfume </title>
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

  <?php
    // Sản phẩm mới
    $heading = "Sản Phẩm ";
    $products = [
      ['id'=>1, 'img'=>'asset/images/hinh1.webp','name'=>'Giorgio Armani Acqua Di Gio Pour Homme','price'=>'1,680,000'],
      ['id'=>2, 'img'=>'asset/images/hinh2.webp','name'=>'Giorgio Armani Acqua Di Gio Pour Homme','price'=>'1,680,000'],
      ['id'=>3, 'img'=>'asset/images/hinh3.webp','name'=>'Giorgio Armani Acqua Di Gio Pour Homme','price'=>'1,680,000'],
      ['id'=>4, 'img'=>'asset/images/hinh4.webp','name'=>'Giorgio Armani Acqua Di Gio Pour Homme','price'=>'1,680,000'],
      ['id'=>5, 'img'=>'asset/images/hinh5.webp','name'=>'Chanel Bleu De Chanel','price'=>'2,150,000'],
      ['id'=>5, 'img'=>'asset/images/hinh5.webp','name'=>'Chanel Bleu De Chanel','price'=>'2,150,000'],
      ['id'=>5, 'img'=>'asset/images/hinh5.webp','name'=>'Chanel Bleu De Chanel','price'=>'2,150,000'],
      ['id'=>5, 'img'=>'asset/images/hinh5.webp','name'=>'Chanel Bleu De Chanel','price'=>'2,150,000'],
      ['id'=>5, 'img'=>'asset/images/hinh5.webp','name'=>'Chanel Bleu De Chanel','price'=>'2,150,000'],
      ['id'=>5, 'img'=>'asset/images/hinh5.webp','name'=>'Chanel Bleu De Chanel','price'=>'2,150,000'],
    ];
    include 'parts/hot-products.php';
?>
  <!-- <main style="min-height:30vh;">
  </main> -->
  <?php include 'parts/footer.php'; ?>
  <script src="asset/js/scrip.js"></script>
</body>
</html>