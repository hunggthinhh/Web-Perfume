<?php $heading = "THƯƠNG HIỆU"; ?>
<section class="hot-products">
  <div class="container">

    <!-- Heading ra ngoài layout -->
    <div class="row-grid">
      <p class="heading-texts"><?php echo $heading ?? "Sản Phẩm"; ?></p>
    </div>

    <!-- Layout gray chỉ bao phần thương hiệu -->
    <div class="layout-gray">
      <div class="brand-section-flex">
        <!-- Left: Brand Images -->
        <div class="brand-section-left">
          <img src="asset/images/nen2.jpg" alt="Brand 1" />
        </div>

    

        <!-- Right: Brand Logo Grid -->
        <div class="brand-section-right">
          <div class="brand-section-more"></div>
          <div class="brand-logos-grid">
            <?php
              $brand_logos = [
                'GUCCI'=>"asset/images/nen2.jpg",
                'Jean Paul GAULTIER'=>"asset/images/nen2.jpg",
                'narciso rodriguez'=>"asset/images/nen2.jpg",
                'GIORGIO ARMANI'=>"asset/images/nen2.jpg",
                'paco rabanne'=>"asset/images/nen2.jpg",
                'Calvin Klein'=>"asset/images/nen2.jpg",
                'VERSACE'=>"asset/images/nen2.jpg",
                'BURBERRY'=>"asset/images/nen2.jpg",
                'MARC JACOBS'=>"asset/images/nen2.jpg",
                'VALENTINO'=>"asset/images/nen2.jpg",
                'PRADA'=>"asset/images/nen2.jpg",
                'CAROLINA HERRERA'=>"asset/images/nen2.jpg",
                'Ralph LAUREN'=>"asset/images/nen2.jpg",
                'V&R'=>"asset/images/nen2.jpg",
                'LACOSTE'=>"asset/images/nen2.jpg",
                'Chloé'=>"asset/images/nen2.jpg"
              ];
              foreach ($brand_logos as $name=>$img) {
                echo '<div class="brand-logo-cell">
                  <img src="' . htmlspecialchars($img) . '" alt="' . htmlspecialchars($name) . '" title="' . htmlspecialchars($name) . '"/>
                </div>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
