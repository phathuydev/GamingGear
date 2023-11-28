<div class="d-flex justify-content-center align-items-center mb-5">
    <div class="most-popular mt-4" style="width: 35% !important;">
        <div class="card-body p-4 p-lg-5 text-black">
            <form>
                <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold mb-0">
                        <img class="img-login" src="<?= _WEB_ROOT ?>/public/assets/client/images/icon-logo.png" alt=""
                             style="width: 50px !important;">
                    </span>
                </div>
                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: #ec6090;">Register</h5>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17" style="color: #ec6090;">Username</label>
                    <input type="text" id="form2Example17" class="form-control form-control-lg"/>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17" style="color: #ec6090;">Email</label>
                    <input type="email" id="form2Example17" class="form-control form-control-lg"/>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27" style="color: #ec6090;">Password</label>
                    <input type="password" id="form2Example27" class="form-control form-control-lg"/>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27" style="color: #ec6090;">Confirm Password</label>
                    <input type="password" id="form2Example27" class="form-control form-control-lg"/>
                </div>

                <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block " type="button"
                            style="background-color: #ec6090; color: #fff;">Register
                    </button>
                </div>

                <a class="float-start small text-white mb-4" href="<?php echo _WEB_ROOT ?>/lgUser"><i
                            class="fa-solid fa-arrow-left"></i> Return Login</a>
                <button class="btn btn-lg btn-block btn-primary mt-5" style="background-color: #dd4b39;" type="submit">
                    <i class="fab fa-google me-2 "></i> Sign in with google
                </button>

            </form>
        </div>
    </div>
</div>