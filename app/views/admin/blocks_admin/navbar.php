<nav class="navbar p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
    <a class="navbar-brand brand-logo-mini" href="<?= _WEB_ROOT ?>/gg-admin"><img src="<? echo _WEB_ROOT ?>/public/assets/admin/img/logo4.jpg" alt="logo" style="width: 30px !important; height: 30px !important;" /></a>
  </div>
  <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav w-100">
      <li class="nav-item w-100">
        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
          <input type="text" class="form-control" placeholder="Search products">
        </form>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-lg-block">
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
          <h6 class="p-3 mb-0">Projects</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-file-outline text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1">Software Development</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-web text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1">UI Development</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-layers text-danger"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1">Software Testing</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <p class="p-3 mb-0 text-center">See all projects</p>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-shopping"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <h6 class="p-3 mb-0">Orders New</h6>
          <div class="dropdown-divider"></div>
          <?php if ((count($getOrderLimitDuringTheDay)) != null) : ?>
            <?php foreach ($getOrderLimitDuringTheDay as $item) : ?>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?= !empty($item['user_image_path']) ? _WEB_ROOT . '/' . $item['user_image_path'] . ($item['user_image'] ? $item['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($item['user_image'] ? $item['user_image'] : _WEB_ROOT . '/' . $item['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                         style="width: 40px; height: 40px; border-radius: 30px;" alt="image"/>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1"><?= $item['user_name'] ?></p>
                  <p class="text-muted mb-0 mt-2"><?= formatTimeAgo(strtotime($item['create_at'])); ?></p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
            <?php endforeach ?>
          <?php else : ?>
            <a class="dropdown-item preview-item">
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-danger">There are no orders yet</p>
              </div>
            </a>
          <?php endif ?>
          <div class="dropdown-divider"></div>
          <p class="p-3 mb-0 dropdown-item preview-item d-flex justify-content-center">
            <a href="<?= _WEB_ROOT ?>/admin/manage/order/list/8/1" class="text-white text-center text-decoration-none">See all order</a>
          </p>
        </div>
      </li>
      <li class="nav-item dropdown border-left">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <h6 class="p-3 mb-0">Comments New</h6>
          <?php if ((count($getCommentProductDuringTheDay)) != null) : ?>
            <?php foreach ($getCommentProductDuringTheDay as $item) : ?>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                      <img src="<?= !empty($item['user_image_path']) ? _WEB_ROOT . '/' . $item['user_image_path'] . ($item['user_image'] ? $item['user_image'] : 'public/assets/admin/uploaded_img/default_img.jpg') : ($item['user_image'] ? $item['user_image'] : _WEB_ROOT . '/' . $item['user_image_path'] . 'public/assets/admin/uploaded_img/default_img.jpg'); ?>"
                           style="width: 40px; height: 40px; border-radius: 30px;"" alt=" image" />
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1"><?= $item['user_name'] ?></p>
                  <p class="text-small text-muted mb-0 mt-2"><?= formatTimeAgo(strtotime($item['create_at'])); ?></p>
                  <p class="text-white ellipsis mb-0 mt-2"> <?= $item['comment_content'] ?> </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
            <?php endforeach; ?>
          <?php else : ?>
            <a class="dropdown-item preview-item">
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-danger">There are no comments yet</p>
              </div>
            </a>
          <?php endif ?>
          <p class="p-3 mb-0 dropdown-item preview-item d-flex justify-content-center">
            <a href="<?= _WEB_ROOT ?>/admin/manage/comment/list/1" class="text-white text-center text-decoration-none">See all comment</a>
          </p>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
          <div class="navbar-profile">
            <img class="img-xs rounded-circle" src="<?php echo _WEB_ROOT . '/' . $getUserSession['user_image_path'] . $getUserSession['user_image']; ?>" alt="">
            <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $getUserSession['user_name'] ?></p>
            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list mt-1" aria-labelledby="profileDropdown">
          <h6 class="p-1 mb-0"></h6>
          <div class="dropdown-divider"></div>
          <a href="<?php echo _WEB_ROOT ?>/admin/login/logout" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-logout text-danger"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject mb-1">Log out</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item border-bottom" href="<?php echo _WEB_ROOT ?>/home">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-arrow-left text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject mb-1">Return Website</p>
            </div>
          </a>
          <h6 class="p-0 mt-0"></h6>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-format-line-spacing"></span>
    </button>
  </div>
</nav>
<div class="main-panel">
  <div class="content-wrapper py-5">