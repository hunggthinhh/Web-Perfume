<section class="hot-products">
  <div class="container">
    <div class="layout-gray">
      <div class="row-grid">
        <p class="heading-text"><?php echo $heading ?? "Sản Phẩm"; ?></p>
      </div>
      <div class="row-grid-hot-products">
        <?php foreach (($products ?? []) as $product) { ?>
          <div class="hot-product-item">
            <a href="product.php?id=<?php echo urlencode($product['id']); ?>">
              <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
            </a>
            <a href="product.php?id=<?php echo urlencode($product['id']); ?>">
              <p class="product-name" style="text-align: center;"><?php echo htmlspecialchars($product['name']); ?></p>
            </a>
            <div class="hot-product-item-price">
              <a href="product.php?id=<?php echo urlencode($product['id']); ?>">
                <p class="product-price" style="text-align: center;"><?php echo htmlspecialchars($product['price']); ?><sup>đ</sup></p>
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>