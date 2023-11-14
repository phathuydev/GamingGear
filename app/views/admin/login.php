<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo (isset($pages_title) ? $pages_title : 'Login Admin Gaming Gear'); ?></title>
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<? echo _WEB_ROOT ?>/public/assets/admin/css/style.css">
  <link rel="shortcut icon" href="<? echo _WEB_ROOT ?>/public/assets/admin/img/logo4.jpg" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth" style="background-image: url('<? echo _WEB_ROOT ?>/public/assets/admin/img/login_bg.jpg'); background-size: cover; background-repeat; no-repeat;">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-4 h2">Login</h3>
              <?php HtmlHelper::formOpen('post', _ADMIN_DEFAULT . '/dashboard'); ?>
              <div class="form-group">
                <div class="d-flex">Email<p class="text-danger">*</p>
                </div>
                <?php HtmlHelper::input('<div>', form_error('email', '<span style="color: red;">', '</span>') . '</div>', 'email', 'email', 'form-control p_input', '', 'Email', ''); ?>
              </div>
              <div class="form-group">
                <div class="d-flex">Password<p class="text-danger">*</p>
                </div>
                <?php HtmlHelper::input('<div>', form_error('password', '<span style="color: red;">', '</span>') . '</div>', 'password', 'password', 'form-control p_input', '', 'Password', ''); ?>
              </div>
              <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Remember me </label>
                </div>
              </div>
              <div class="text-center">
                <?php HtmlHelper::submit('Login', 'btn btn-primary btn-block enter-btn'); ?>
              </div>
              <div class="d-flex">
                <a href="<?php echo _WEB_ROOT ?>/home" class="text-white mt-3 col d-flex justify-content-center"><i class="mdi mdi-arrow-left"></i> Return Website</a>
              </div>
              <?php HtmlHelper::formClose(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/off-canvas.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/hoverable-collapse.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/misc.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/chart.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/settings.js"></script>
  <script src="<? echo _WEB_ROOT ?>/public/assets/admin/js/todolist.js"></script>
</body>

</html>