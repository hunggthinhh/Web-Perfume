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

  <!-- product-detail-->
  <section class="cart-section p-to-top">
    <div class="container">
      <!-- Breadcrumb -->
      <div class="row-flex row-flex-product-detai">
        <p>Trang Chủ</p>
        <i class="ri-arrow-right-s-line"></i>
        <p>Giỏ hàng</p>
        <i class="ri-arrow-right-s-line"></i>
        <p>Thông Tin</p>
      </div>

      <!-- Phần nội dung chính -->
      <div class="layout-compact">
        <div class="product-detail-content">
          <p class="content">THÔNG TIN GIAO HÀNG</p>
          <div class="cart-section-right-input name-phone">
            <input type="text" placeholder="Họ và tên" name="fullname" id="fullname">
            <input type="text" placeholder="Điện thoại" name="phone" id="phone">
          </div>
          <!-- Email -->
          <div class="cart-section-right-input email">
            <input type="email" placeholder="Email" name="email" id="email">
          </div>
          <!-- Địa chỉ chi tiết -->
          <div class="cart-section-right-select">
            <select id="provinces" onchange="getProvinces(event)">
              <option value="">Tỉnh/TP</option>
            </select>
            <select id="districts" onchange="getDistricts(event)">
              <option value="">Quận/huyện</option>
            </select>
            <select id="wards">
              <option value="">Phường/xã</option>
            </select>
          </div>
          <!-- Địa chỉ -->
          <div class="cart-section-right-input address">
            <input type="text" placeholder="Địa chỉ" name="address" id="address">
          </div>
          <!-- Ghi chú -->
          <div class="cart-section-right-input note">
            <input type="text" placeholder="Ghi chú" name="note" id="note">
            <div>
              <form action="order_confirm.php" method="post">
                <button type="submit" class="main-btn">Gửi Đơn Hàng</button>
              </form>
            </div>
      </div>
    </div>
  </section>

  <?php include 'parts/footer.php'; ?>
  <script src="asset/js/scrip.js"></script>
  <script src="asset/js/api.js"></script>
</body>
</html>