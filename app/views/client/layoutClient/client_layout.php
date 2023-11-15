<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title><?php echo (isset($pages_title) ? $pages_title : 'Gaming Gear'); ?></title>
  <!-- Bootstrap core CSS -->
  <link href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/style.css">
  <link rel="stylesheet" href="<?php echo (isset($css_checkout) ? $css_checkout : false); ?>">
    <link rel="stylesheet" href="<?php echo(isset($css_post) ? $css_post : false); ?>">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/owl.css">
  <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="<? echo _WEB_ROOT ?>/public/assets/admin/img/logo4.jpg" />
</head>

<body class="header-text">
  <section class="h-100 gradient-custom m-0">
    <div class="container p-0">
      <?php
      $this->render('./client/blocks_client/navbar');
      $this->render($content, $sub_content);
      $this->render('./client/blocks_client/footer');
      ?>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/jquery.min.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/bootstrap.min.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/isotope.min.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/owl-carousel.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/tabs.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/popup.js"></script>
  <script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/custom.js"></script>
</body>

</html>