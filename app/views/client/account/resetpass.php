<?php include '../../../../app/core/resetPass.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title><?php echo(isset($pages_title) ? $pages_title : 'Gaming Gear'); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/style.css">
    <link rel="stylesheet" href="<?php echo(isset($css_checkout) ? $css_checkout : false); ?>">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/owl.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="<? echo _WEB_ROOT ?>/public/assets/admin/img/logo4.jpg"/>
</head>

<body style="background-image: url('https://i.pinimg.com/originals/a7/5b/f8/a75bf8a2aa58d056d640de66665c18be.jpg'); background-repeat: no-repeat; background-position: center;">
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="most-popular mt-5" style="width: 30% !important;">
        <div class="bg-dark p-0 p-lg-5 text-black" style="border-radius: 20px;">
            <div class="card-body p-0 shadow-5 text-center">
                <form method="post" class="card-body text-cente d-inline-block">
                    <h3 class="mb-3 h4" style="color: #ec6090;">Reset Password</h3><br>
                    <?php echo isset($err) ? '<p class="text-danger mt-2 text-center">' . $err . '</p>' : false ?>
                    <div class="form-outline mb-4">
                        <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg"
                               placeholder="Email"
                               value="<?= isset($_SESSION['user_email']) ? $_SESSION['user_email'] : false; ?>"/>
                        <?php echo isset($msgEmail) ? '<p class="text-danger mt-2 text-center">' . $msgEmail . '</p>' : false ?>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="typeEmailX-2" name="password" class="form-control form-control-lg"
                               placeholder="Password"/>
                        <?php echo isset($msgReset) ? '<p class="text-danger mt-2 text-center">' . $msgReset . '</p>' : '<p class="text-danger mt-2 text-center">' . (isset($notMatch) ? $notMatch : (isset($strlenPass) ? $strlenPass : false)) . '</p>' ?>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="typeEmailX-2" name="cpassword" class="form-control form-control-lg"
                               placeholder="Confirm Password"/>
                        <?php echo isset($msgCpass) ? '<p class="text-danger mt-2 text-center">' . $msgCpass . '</p>' : false ?>
                        </div>
                    <button class="btn btn-lg btn-block mb-2" type="submit" name="resetpass"
                            style="background-color: #ec6090; color: #fff;">Reset
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/jquery.min.js"></script>
<script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/bootstrap.min.js"></script>
<script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/isotope.min.js"></script>
<script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/owl-carousel.js"></script>
<script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/tabs.js"></script>
<script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/popup.js"></script>
<script src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/custom.js"></script>
</body>

</html>