<header class="header-area header-sticky">
  <div class="container p-0">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav d-flex align-items-center pt-2">
          <a href="<?= _WEB_ROOT; ?>/home" class="logo">
            <img src="<?php echo _WEB_ROOT ?>/public/assets/client/images/Gaming-logoWT.png" alt="">
          </a>
          <div class="search-input">
            <form id="search" action="#">
              <input type="text" class="bg-white" placeholder="Seach Product" id='searchText' name="searchKeyword" onkeypress="handle" />
              <i class="fa fa-search"></i>
            </form>
          </div>
          <!-- ***** Search End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav align-items-center text-white">
            <li><a href="<?php echo _WEB_ROOT; ?>/home" class="active">home</a></li>
            <li><a href="<?php echo _WEB_ROOT; ?>/products/index/8/1" class="active">Product</a></li>
            <li><a href="<?php echo _WEB_ROOT; ?>/contacts" class="active">contact</a></li>
            <li><a href="<?php echo _WEB_ROOT; ?>/posts/index/8/1" class="active">post</a></li>
            <li><a href="<?php echo _WEB_ROOT; ?>/carts" class="active"><i class="fa fa-shopping-basket"></i></a></li>
            <?php if (!empty(Session::data('google_login')) && !empty($_SESSION['access_token'])) : ?>
              <li><a href="<?= _WEB_ROOT ?>/profile/index/1"><img src="<?= $getUserGoogle['user_image']; ?>" style="width: 40px !important; border-radius: 30px;" alt="avatar"></a></li>
            <?php elseif (empty(Session::data('client_login'))) : ?>
              <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a><img src="<?php echo _WEB_ROOT . '/' . 'public/assets/admin/uploaded_img/default_img.jpg'; ?>" style="width: 40px !important; border-radius: 30px;" alt="avatar"></a></li>
            <?php else : ?>
              <li><a href="<?= _WEB_ROOT ?>/profile/index/1"><img src="<?php echo _WEB_ROOT . '/' . $getUserClient['user_image_path'] . ($getUserClient['user_image'] ? $getUserClient['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') ?>" style="width: 40px !important; border-radius: 30px;" alt="avatar"></a></li>
            <?php endif ?>
            <div class="dropdown-menu rounded-3 mt-2 pt-1 pb-1 ps-0 pe-0" style="top: -55px; left: 40px;">
              <?php if (empty(Session::data('client_login'))) : ?>
                <a class="dropdown-item" style="font-size: 17px;" href="<?= _WEB_ROOT; ?>/lgUser">Login</a>
              <?php else : ?>
                <a class="dropdown-item" style="font-size: 17px;" href="<?= _WEB_ROOT ?>/client/account/auth/logout">Logout</a>
              <?php endif ?>
            </div>
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<div class="row w-auto">
  <div class="col-lg-12 p-0">
    <div class="pt-5 mt-5 page-content pb-0">