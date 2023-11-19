<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky bg-transparent">
  <div class="container p-0">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav d-flex align-items-center">
          <!-- ***** Logo Start ***** -->
            <a href="<?= _WEB_ROOT; ?>/home" class="logo">
            <img src="<? echo _WEB_ROOT ?>/public/assets/admin/img/logo2.jpg" alt="">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Search End ***** -->
          <div class="search-input">
            <form id="search" action="#">
              <input type="text" placeholder="Seach Product" id='searchText' name="searchKeyword" onkeypress="handle" />
              <i class="fa fa-search"></i>
            </form>
          </div>
          <!-- ***** Search End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
              <li><a href="<?php echo _WEB_ROOT; ?>/home" class="active">home</a></li>
              <li><a href="<?php echo _WEB_ROOT; ?>/products" class="active">Product</a></li>
              <li><a href="<?php echo _WEB_ROOT; ?>/contacts" class="active">contact</a></li>
              <li><a href="<?php echo _WEB_ROOT; ?>/posts" class="active">post</a></li>
              <li><a href="<?php echo _WEB_ROOT; ?>/cart" class="active"><i class="fa fa-shopping-basket"></i></a></li>
              <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                  class="d-flex align-items-center justify-content-center p-2">
                  <img src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg"
                       style="width: 40px !important; border-radius: 30px;" alt="avatar">
            </li>
            <div class="dropdown-menu rounded-3 mt-2">
                <a class="dropdown-item" style="font-size: 17px;" href="<?= _WEB_ROOT; ?>/profile">Profile</a>
                <a class="dropdown-item" style="font-size: 17px;" href="<?= _WEB_ROOT; ?>/lgUser">Login</a>
                <a class="dropdown-item" style="font-size: 17px;" href="<?= _WEB_ROOT; ?>/">Logout</a>
                <a class="dropdown-item" style="font-size: 17px;" href="<?= _WEB_ROOT; ?>/gg-admin">Admin Manager</a>
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
<div class="row">
    <div class="col-lg-12 p-0">
        <div class="page-content p-5">