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
                <h3 class="card-title text-left h2">Login</h3>
                <?php echo isset($msg) ? '<p class="text-danger">' . $msg . '</p>' : false; ?>
                <form method="post" class="mt-4">
                    <div class="form-group">
                        <div class="d-flex">Email<p class="text-danger">*</p>
                        </div>
                        <input type="email" class="form-control" name="user_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <div class="d-flex">Password<p class="text-danger">*</p>
                        </div>
                        <input type="password" class="form-control" name="user_password" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary btn-block enter-btn p-3 mt-5">
                    <div class="d-flex">
                        <a href="<?php echo _WEB_ROOT ?>/home"
                           class="text-white mt-3 col d-flex justify-content-center"><i class="mdi mdi-arrow-left"></i>
                            Return Website</a>
                    </div>
                </form>
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