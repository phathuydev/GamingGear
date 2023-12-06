<div class="container-scroller">
  <!-- partial:partials/_sidebar.php -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="<?php echo _ADMIN_DEFAULT ?>/dashboard"><img src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/logo2.jpg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="<?php echo _ADMIN_DEFAULT ?>/dashboard"><img src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/logo4.jpg" alt="logo" style="width: 30px !important; height: 30px !important;" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="<?= _WEB_ROOT . '/' . $getUserSession['user_image_path'] . $getUserSession['user_image'] ?>" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-1 font-weight-normal"><?= $getUserSession['user_name'] ?></h5>
              <span><?= $getUserSession['user_role'] == 1 ? 'ADMIN' : ''; ?></span>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="<?php echo _ADMIN_DEFAULT ?>/dashboard">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <!-- User -->
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="user">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/user/list/8/1">List</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/user/user_add">Add</a></li>
          </ul>
        </div>
      </li>
      <!-- Product -->
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
          <span class="menu-icon">
            <i class="mdi mdi-tag-multiple"></i>
          </span>
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/product/list/8/1">List</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/product/product_add/8/1">Add</a></li>
          </ul>
        </div>
      </li>
      <!-- Order -->
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#order" aria-expanded="false" aria-controls="order">
          <span class="menu-icon">
            <i class="mdi mdi-shopping"></i>
          </span>
          <span class="menu-title">Order</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="order">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/order/list/8/1">List</a></li>
          </ul>
        </div>
      </li>
      <!-- Category -->
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category">
          <span class="menu-icon">
            <i class="mdi mdi-folder-multiple"></i>
          </span>
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="category">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/category/list/8/1">List</a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/category/category_add">Add</a></li>
          </ul>
        </div>
      </li>
      <!-- Comment -->
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#comment" aria-expanded="false" aria-controls="comment">
          <span class="menu-icon">
            <i class="mdi mdi-comment"></i>
          </span>
          <span class="menu-title">Comment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="comment">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/comment/list/1">List</a></li>
          </ul>
        </div>
      </li>
      <!-- Post -->
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#post" aria-expanded="false" aria-controls="post">
          <span class="menu-icon">
            <i class="mdi mdi-postage-stamp"></i>
          </span>
          <span class="menu-title">Post</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="post">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/post/list/8/1">List</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/post/post_add">Add</a></li>
          </ul>
        </div>
      </li>
      <!-- Banner -->
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#banner" aria-expanded="false" aria-controls="banner">
          <span class="menu-icon">
            <i class="mdi mdi-panorama"></i>
          </span>
          <span class="menu-title">Banner</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="banner">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/banner/list/1/8/1">List</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo _MANAGE_DEFAULT ?>/banner/banner_home_add">Add
                Home</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>