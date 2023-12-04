<?php include './app/core/google_source.php'; ?>
<div class="d-flex justify-content-center align-items-center mb-5">
    <div class="most-popular mt-4" style="width: 30% !important;">
        <div class="card-body p-4 p-lg-5 text-black">
            <form method="post" onsubmit="return validateRegister()">
                <div class="d-flex align-items-center pb-1">
                    <span class="h1 fw-bold mb-0">
                        <img class="img-login" src="<?= _WEB_ROOT ?>/public/assets/client/images/icon-logo.png" alt="" style="width: 50px !important;">
                    </span>
                </div>
                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #ec6090;">Register</h5>
                <?php echo isset($msg_register) ? '<p class="text-danger mb-3">' . $msg_register . '</p>' : false; ?>
                <div class="form-outline mb-3">
                    <label class="form-label" for="user_name" style="color: #ec6090;">Username<em class="text-danger"> * </em></label>
                    <input type="text" id="user_name" name="user_name" class="form-control form-control-lg" />
                    <p class="text-danger mt-1" id="error_user_name"></p>
                </div>
                <div class="form-outline mb-3">
                    <label class="form-label" for="user_email" style="color: #ec6090;">Email<em class="text-danger"> * </em></label>
                    <input type="email" id="user_email" name="user_email" class="form-control form-control-lg" />
                    <p class="text-danger mt-1" id="error_user_email"></p>
                </div>
                <div class="form-outline mb-3">
                    <label class="form-label" for="user_password" style="color: #ec6090;">Password<em class="text-danger"> * </em></label>
                    <input type="password" id="user_password" name="user_password" class="form-control form-control-lg" />
                    <p class="text-danger mt-1" id="error_user_password"></p>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="user_cpassword" style="color: #ec6090;">Confirm Password<em class="text-danger"> * </em></label>
                    <input type="password" id="user_cpassword" name="user_cpassword" class="form-control form-control-lg" />
                    <p class="text-danger mt-1" id="error_user_cpassword"></p>
                </div>
                <div class="pt-1 mb-3">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="register" style="background-color: #ec6090; color: #fff;">Register</button>
                </div>
                <a class="float-start small text-white mb-4" href="<?php echo _WEB_ROOT ?>/lgUser"><i class="fa-solid fa-arrow-left"></i> Return Login</a>
                <?php if (isset($authUrl)) { ?>
                    <a href="<?= $authUrl ?>" class="btn btn-lg btn-block btn-primary mt-5" style="background-color: #dd4b39;"><i class="fab fa-google me-2"></i> Sign in with google</a>
                <?php } ?>
            </form>
        </div>
    </div>
</div>