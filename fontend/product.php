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
  <section class="product-detail p-to-top">
    <div class="container">
      <div class="row-flex row-flex-product-detai">
        <p>Sản Phẩm</p>
        <i class="ri-arrow-right-s-line"></i>
        <p> Giorgio Armani Acqua Di Gio Pour Homme </p>
      </div>
      <div class="layout-gray">
        <div class="row-grid">
          <div class="product-detail-left">
            <img class="main-image" src="asset/images/hinh1.webp" alt="">
            <div class="product-images-items">
              <img class="active" src="asset/images/hinh2.webp" alt="">
              <img src="asset/images/hinh3.webp" alt="">
              <img src="asset/images/hinh7.webp" alt="">
              <img src="asset/images/hinh4.webp" alt="">
            </div>
          </div>

          <div class="product-detail-right">
            <div class="product-deatail-right-infor">
              <h1>Giorgio Armani Acqua Di Gio Pour Homme</h1>
              
              <div class="hot-product-item-price">
                <div class="background">
                  <p class="product-price">1,680,000<sup>đ</sup> <span class="product-price-1">1,730,000<sup>đ</sup></span></p>
                </div>
              </div>
              
              <p style="font-size: 18px;">
                <i class="ri-truck-line" style="font-size: 18px; vertical-align: middle; margin-right: 6px;"></i>
                Freeship toàn quốc
              </p>
            </div>

            <div class="product-deatail-right-des">
              <h2>Đặc Điểm Nổi Bật</h2>
              <ul> 
                <li>Eau de Parfum 100ml</li>
                <li>Freeship toàn quốc</li>
                <li>Chính hãng 100%</li>
                <li>Đổi trả miễn phí</li>
              </ul>
            </div>

            <div class="product-deatail-right-quantity">
              <div class="product-deatail-right-quantity-input">
                <h2>Số Lượng&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                <i class="ri-subtract-line"></i>
                <input class="quantity-input" value="1">
                <i class="ri-add-line"></i>
              </div>
            </div>
            <br>
            <div class="product-deatail-right-addcart">
              <form action="cart.php" method="get" style="display: inline;">
                <button type="submit" class="main-btm">Thêm vào giỏ hàng</button>
              </form>
              <a href="cart.php?id=<?php echo $product['id']; ?>" class="main-btm">Mua Ngay</a>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- product-detail-content -->
  <section class="product-detail p-to-top">
    <div class="container">
      <div class="layout-gray">
        <div class="product-detail-content">
          <p class="content">CHI TIẾT SẢN PHẨM</p>
          <div class="detail-row">
            <div class="label">Phân Loại</div>
            <div class="value">Nước hoa</div>
          </div>
          <div class="detail-row">
            <div class="label">Xuất xứ</div>
            <div class="value">Pháp</div>
          </div>
          <div class="detail-row">
            <div class="label">Nhóm hương</div>
            <div class="value">Gỗ, Biển Cả</div>
          </div>
          <div class="detail-row">
            <div class="label">Phong cách</div>
            <div class="value">Thanh lịch (Elegant), Thoải mái (Casual), Tươi mát (Fresh)</div>
          </div>
          <div class="detail-row">
            <div class="label">Dịp sử dụng</div>
            <div class="value">Hàng ngày, Văn phòng, Mùa hè, Du lịch</div>
          </div>
          <div class="detail-row">
            <div class="label">Mùi Hương</div>
            <div class="value">Tươi mát, Trái Cây, Táo xanh</div>
          </div>
        </div>
        <br>
        <div class="product-detail-contents">
          <p class="contents">MÔ TẢ SẢN PHẨM</p>
          <p> Hương đầu: Quả táo, Gừng, Cam Bergamot. </p>
          <p>Hương giữa: Xô thơm, Quả bách xù, Hoa phong lữ đỏ.</p>
          <p>Hương cuối: Nhựa hương, Đậu Tonka, Gỗ tuyết tùng, Cỏ hương bài, Nhựa hương Olibanum.</p>
          <br>
          <p>Lý do dễ hiểu nhất để Y Eau de Parfum thành công chinh phục các quý ông, ấy chính là ở mùi hương của chai nước hoa này. Đúng vậy, Y EDP sở hữu tất cả những nốt hương tuyệt vời dành cho nam giới, một chút trái cây giòn giã của Táo, nét đầm ấm thanh tao của Gừng, để dẫn vào cái tâm lõi Thảo mộc của mùi hương. Thảo mộc đã tạo nên sự nhã nhặn lịch lãm cho Y EDP, bằng mùi hương xanh xanh, hăng hăng, vừa lãnh đạm mà cũng đủ mạnh mẽ, bởi Xô thơm và một chút Bách xù, trên cái nền ngọt dịu và cứng chắc của Gỗ và Nhựa thơm. Y EDP có mọi thứ mà một người đàn ông cần ở hương thơm của mình, để phô diễn và tự tin với sự nam tính trời ban của mình.</p>
          <br>
          <p>Có thể nói, Y EDP là một hương thơm toàn diện để có thể trở thành “mùi hương đặc trưng” của bất kỳ quý ông nào, bởi sự dễ gần, dễ kiểm soát và có thể khoác lên mình bất cứ lúc nào ta muốn.</p>
        </div>
      </div>
    </div>
  </section>

  <?php
    // Các sản phẩm phổ biến minh hoạ
    $heading = "Sản Phẩm Phổ Biến";
    $products = [
      [
        'img' => 'asset/images/hinh1.webp',
        'name' => 'Giorgio Armani Acqua Di Gio Pour Homme',
        'price' => '1,680,000'
      ],
      [
        'img' => 'asset/images/hinh2.webp',
        'name' => 'Chanel Bleu De Chanel',
        'price' => '2,150,000'
      ],
      [
        'img' => 'asset/images/hinh3.webp',
        'name' => 'Dior Sauvage',
        'price' => '2,100,000'
      ],
      [
        'img' => 'asset/images/hinh4.webp',
        'name' => 'Versace Eros',
        'price' => '1,900,000'
      ],
      [
        'img' => 'asset/images/hinh5.webp',
        'name' => 'YSL Y Eau De Parfum',
        'price' => '2,250,000'
      ],
      [
        'img' => 'asset/images/hinh6.webp',
        'name' => 'Creed Aventus',
        'price' => '6,500,000'
      ],
      [
        'img' => 'asset/images/hinh7.webp',
        'name' => 'Tom Ford Black Orchid',
        'price' => '2,550,000'
      ]
    ];
    include 'parts/hot-products.php';
  ?>

  <?php include 'parts/footer.php'; ?>
  <script src="asset/js/scrip.js"></script>
</body>
</html>