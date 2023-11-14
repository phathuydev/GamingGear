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
          <a href="home" class="logo">
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
            <li><a href="home" class="active">Home</a></li>
            <li><a href="products" class="active">Product</a></li>
            <li><a href="contact" class="active">Contact</a></li>
            <li><a href="post" class="active">Post</a></li>
            <li><a href="cart" class="active"><i class="fa fa-shopping-basket"></i></a></li>
            <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="d-flex align-items-center justify-content-center p-2">
              <img src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/avatar.jpg" style="width: 40px !important; border-radius: 30px;" alt="avatar">
            </li>
            <div class="dropdown-menu rounded-3 mt-2">
              <a class="dropdown-item" style="font-size: 17px;" href="profile">Profile</a>
              <a class="dropdown-item" style="font-size: 17px;" href="login">Login</a>
              <a class="dropdown-item" style="font-size: 17px;" href="">Logout</a>
              <a class="dropdown-item" style="font-size: 17px;" href="gg-admin">Admin Manager</a>
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