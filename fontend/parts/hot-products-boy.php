<?php $heading = "SẢN PHẨM NAM"; 
$products = [
  ['id'=>1, 'img'=>'asset/images/hinh1.webp','name'=>'Giorgio Armani Acqua Di Gio Pour Homme','price'=>'1,680,000'],
  ['id'=>2, 'img'=>'asset/images/hinh2.webp','name'=>'Giorgio Armani Acqua Di Gio Pour Homme','price'=>'1,680,000'],
  ['id'=>3, 'img'=>'asset/images/hinh3.webp','name'=>'Giorgio Armani Acqua Di Gio Pour Homme','price'=>'1,680,000'],
  ['id'=>4, 'img'=>'asset/images/hinh4.webp','name'=>'Giorgio Armani Acqua Di Gio Pour Homme','price'=>'1,680,000'],
  ['id'=>5, 'img'=>'asset/images/hinh5.webp','name'=>'Chanel Bleu De Chanel','price'=>'2,150,000'],
];
?>
<section class="hot-products">
  <div class="container">

    <!-- Heading nằm ngoài layout-gray -->
    <div class="row-grid">
      <p class="heading-texts"><?php echo $heading ?? "Sản Phẩm"; ?></p>
    </div>

    <!-- Bọc sản phẩm trong layout-gray -->
    <div class="layout-gray">
      <div class="row-grid-hot-products">
        <?php foreach (($products ?? []) as $product) { ?>
          <div class="hot-product-item">
            <a href="product.php?id=<?php echo urlencode($product['id']); ?>">
              <img src="<?php echo htmlspecialchars($product['img']); ?>" 
                   alt="<?php echo htmlspecialchars($product['name']); ?>">
            </a>
            <a href="product.php?id=<?php echo urlencode($product['id']); ?>">
              <p class="product-name" style="text-align: center;">
                <?php echo htmlspecialchars($product['name']); ?>
              </p>
            </a>
            <div class="hot-product-item-price">
              <a href="product.php?id=<?php echo urlencode($product['id']); ?>">
                <p class="product-price" style="text-align: center;">
                  <?php echo htmlspecialchars($product['price']); ?><sup>đ</sup>
                </p>
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>
</section>
