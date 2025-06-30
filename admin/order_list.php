<!DOCTYPE html>
<html lang="vi">
<?php include 'parts/head.php'; ?>
<body>
  <section class="admin">
    <div class="row-grid">
      <?php include 'parts/sidebar.php'; ?>
      <div class="admin-content">
        <?php include 'parts/content-top.php'; ?>
        <div class="admin-content-main">
          <h1 class="contents">Danh Sách Đơn Hàng</h1>
          <?php include 'order/list.php'; ?>
        </div>
      </div>
    </div>
  </section>
  <script src="asset/js/scrip.js"></script>
</body>
</html>