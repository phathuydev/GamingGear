<div class="d-flex justify-content-center align-items-center mb-5">
    <div class="most-popular mt-4" style="width: 35% !important;">
        <div class="card-body p-2 text-black">
            <form method="post" class="card-body p-5 text-center">
                <h3 class="mb-4 h4 text-center col-12" style="color: #ec6090;">Forgot Password</h3>
                <input type="email" id="typeEmailX-2" name="user_email" class="form-control"
                       placeholder="Email address"/>
                <?php echo isset($err_user_email) ? '<p class="text-danger mt-2 text-center">' . $err_user_email . '</p>' : '<p class="text-success mt-2 text-center">' . $err_user_email_success . '</p>' ?>
                <div class="row mt-4 d-flex justify-content-center">
                    <button class="btn mb-3 col-11 text-center" type="submit" name="forgotPassword"
                            style="background-color: #ec6090; color: #fff;">Submit
                    </button>
                    <a class="float-start small text-white col-12" href="<?php echo _WEB_ROOT ?>/lgUser"><i
                                class="fa-solid fa-arrow-left"></i> Return Login</a>
                </div>
            </form>
        </div>
    </div>
</div>