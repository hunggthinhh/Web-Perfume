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
      <div class="row-flex row-flex-product-detai">
        <p>Trang Chủ</p>
        <i class="ri-arrow-right-s-line"></i>
        <p>Giỏ Hàng</p>
      </div>
      <!-- Phần nội dung chính -->
      <div class="layout-compact">
        <div class="product-detail-content row-grid">
          <!-- Cột trái: Chi tiết đơn hàng -->
          <div class="cart-section-left">
            <h2 class="main-h2">CHI TIẾT ĐƠN HÀNG</h2>
            <div class="cart-section-left-detail">
              <table>
                <thead>
                  <tr>
                    <th>Hình Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Thành Tiền</th>
                    <th>Thao Tác</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Thay đổi tboday thành tbody -->
                  <tr>
                    <td><img style="width: 70px;" src="asset/images/hinh1.webp" alt=""></td>
                    <td>
                      <div class="product-deatail-right-infor">
                        <h1>Giorgio Armani Acqua Di Gio Pour Homme</h1>
                      </div>
                    </td>
                    <td>
                      <div class="product-deatail-right-quantity">
                        <div class="product-deatail-right-quantity-input">
                          <i class="ri-subtract-line"></i>
                          <input class="quantity-input" type="number" min="0" value="1">
                          <i class="ri-add-line"></i>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="hot-product-item-price">
                        <p class="product-price-1">1,680,000<sup>đ</sup></p>
                      </div>
                    </td>
                    <td>
                      <div class="hot-product-item-price">
                        <p class="product-price">1,680,000<sup>đ</sup></p>
                      </div>
                    </td>
                    <td>Xoá</td>
                  </tr>
                  <tr>
                    <td><img style="width: 70px;" src="asset/images/hinh2.webp" alt=""></td>
                    <td>
                      <div class="product-deatail-right-infor">
                        <h1>Giorgio Armani Acqua Di Gio Pour Homme</h1>
                      </div>
                    </td>
                    <td>
                      <div class="product-deatail-right-quantity-input">
                        <i class="ri-subtract-line"></i>
                        <input class="quantity-input" type="number" min="0" value="1">
                        <i class="ri-add-line"></i>
                      </div>
                    </td>
                    <td>
                      <div class="hot-product-item-price">
                        <p class="product-price-1">1,680,000<sup>đ</sup></p>
                      </div>
                    </td>
                    <td>
                      <div class="hot-product-item-price">
                        <p class="product-price">1,680,000<sup>đ</sup></p>
                      </div>
                    </td>
                    <td>Xoá</td>
                  </tr>
                  <tr>
                    <td><img style="width: 70px;" src="asset/images/hinh3.webp" alt=""></td>
                    <td>
                      <div class="product-deatail-right-infor">
                        <h1>Giorgio Armani Acqua Di Gio Pour Homme</h1>
                      </div>
                    </td>
                    <td>
                      <div class="product-deatail-right-quantity-input">
                        <i class="ri-subtract-line"></i>
                        <input class="quantity-input" type="number" min="0" value="1">
                        <i class="ri-add-line"></i>
                      </div>
                    </td>
                    <td>
                      <div class="hot-product-item-price">
                        <p class="product-price-1">1,680,000<sup>đ</sup></p>
                      </div>
                    </td>
                    <td>
                      <div class="hot-product-item-price">
                        <p class="product-price">1,680,000<sup>đ</sup></p>
                      </div>
                    </td>
                    <td>Xoá</td>
                  </tr>
                  <!-- Thêm các sản phẩm khác nếu cần -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Thành tiền cố định ở cuối trang -->
  <div class="cart-summary-fixed">
    <div class="container-cart">
      <div class="row-grid">
        <div class="cart-summary-left">
          <span>Tổng Thành Tiền: </span><span class="product-price">5,040,000<sup>đ</sup></span>
        </div>
        <div class="cart-summary-right">
            <form action="buy.php" method="get" style="display:inline;">
                <button type="submit" class="main-btn-cart">Thanh Toán</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <script src="asset/js/scrip.js"></script>
</body>
</html>