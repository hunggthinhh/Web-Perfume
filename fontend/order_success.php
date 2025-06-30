<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="asset/css/style.css">
  <title>Ben Perfume</title>
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

  <section class="cart-section p-to-top">
    <div class="container">
      <!-- Breadcrumb -->
      <div class="row-flex row-flex-product-detai">
        <p>Trang Chủ</p>
        <i class="ri-arrow-right-s-line"></i>
        <p>Thông Tin</p>
      </div>
      <!-- Phần nội dung chính -->
      <div class="layout-compact">
        <div class="product-detail-content">
          <p class="content">
            Xác nhận đơn hàng:
            <span style="font-weight: bold;">Thành công</span>
          </p>
          <p>
            Đơn hàng của bạn đã được gửi
            <span style="font-weight: bold;">Thành công!</span>
          </p>
          <p>
            Chúng tôi sẽ
            <span style="font-style: italic; font-weight: bold; color: black;">Giao hàng</span>
            trong thời gian 3 ngày làm việc.
          </p>
          <button class="main-btn">Tiếp Tục Mua Hàng</button>
        </div>
      </div>
    </div>
  </section>

  <?php include 'parts/footer.php'; ?>
  <script src="asset/js/scrip.js"></script>
</body>
</html>