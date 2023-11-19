<div class="row">
    <div class="col-lg-12 p-0">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-xl-10 body-login">
                <div class="" style="border-radius: 1rem;">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-6 col-lg-6">
                            <img src="<?= _WEB_ROOT; ?>/public/assets/client/images/banner_login.jpg" alt="login form"
                                 class="img-fluid rounded-4">/>
                        </div>
                        <div class="col-md-6 col-lg-6 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form method="post">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0">
                                            <img class="img-login"
                                                 src="<?php echo _WEB_ROOT ?>/public/assets/client/images/icon-logo.png"
                                                 alt="" style="width: 50px !important;">
                                        </span>
                                    </div>
                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #ec6090;">Sign
                                        into your account</h5>
                                    <?php echo isset($msg_lgClient) ? '<p class="text-danger mb-3">' . $msg_lgClient . '</p>' : false; ?>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" style="color: #ec6090;">Email</label>
                                        <input type="email" name="user_email" class="form-control"/>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" style="color: #ec6090;">Password</label>
                                        <input type="password" name="user_password" class="form-control"/>
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <input class="btn btn-dark btn-lg btn-block" type="submit" value="Login"
                                               style="background-color: #ec6090; color: #fff;">
                                    </div>
                                    <a class="small text-white"
                                       href="<?php echo _WEB_ROOT ?>/client/account/auth/forgot">Forgot password?</a>
                                    <a href="<?php echo _WEB_ROOT ?>/client/account/auth/register" class="h6"
                                       style="color: #ec6090;">Register here</a></p>
                                    <button class="btn btn-lg btn-block btn-primary mt-5"
                                            style="background-color: #dd4b39;" type="submit"><i
                                                class="fab fa-google me-2"></i> Sign in with google
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>