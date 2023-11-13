<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo (isset($pages_title) ? $pages_title : 'Gaming Gear'); ?></title>
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/owl-carousel-2/owl.theme.default.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/css/style.css">
  <link rel="shortcut icon" href="<? echo _WEB_ROOT ?>/public/assets/admin/img/logo4.jpg" />
</head>

<body>
  <?php
  $this->render('./admin/blocks_admin/sidebar');
  $this->render('./admin/blocks_admin/navbar');
  $this->render($body, $sub_content);
  $this->render('./admin/blocks_admin/footer');
  ?>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/off-canvas.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/hoverable-collapse.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/sidebar.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/chart.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/settings.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/todolist.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/dashboard.js"></script>
</body>

</html>