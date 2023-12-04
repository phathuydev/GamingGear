<?php if (!empty($getUserClient)) : ?>
  <div class="container w-auto">
    <div class="most-popular mt-4">
      <div class="container">
        <form method="post" onsubmit="return validateCheckout()">
          <div class="row mt-4">
            <div class="col-xl-7">
              <div class="card-checkout most-popular mt-0">
                <div class="card-body pb-0">
                  <ol class="activity-checkout mb-0 px-4">
                    <li class="checkout-item">
                      <div class="avatar checkout-icon p-1">
                        <div class="avatar-title rounded-circle bg-primary">
                          <i class="fa-solid fa-file-invoice text-white font-size-20"></i>
                        </div>
                      </div>
                      <div class="feed-item-list">
                        <div>
                          <h4 class="font-size-16 mb-3 ms-0">Billing Info</h4>
                          <div class="mb-3">
                            <div>
                              <div class="row">
                                <?php $item = $getUserClient;
                                if (isset($item)) { ?>
                                  <div class="col-lg-12 col-sm-12">
                                    <div class="mb-3">
                                      <label class="form-label text-white">Name<em class="text-danger"> * </em></label>
                                      <input type="text" class="form-control" id="user_name" name="user_name" value="<?= (isset($item['user_name'])) ? $item['user_name'] : false; ?>">
                                      <p class="text-danger mt-1" id="error_user_name"></p>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-sm-12">
                                    <div class="mb-3">
                                      <label class="form-label text-white">Email Address<em class="text-danger"> * </em></label>
                                      <input type="email" class="form-control" id="user_email" name="user_email" value="<?= (isset($item['user_email'])) ? $item['user_email'] : false; ?>">
                                      <p class="text-danger mt-1" id="error_user_email"></p>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-sm-12">
                                    <div class="mb-3">
                                      <label class="form-label text-white">Phone<em class="text-danger"> * </em></label>
                                      <input type="text" class="form-control" id="user_phone" name="user_phone" value="<?= (isset($item['user_phone'])) ? $item['user_phone'] : false; ?>">
                                      <p class="text-danger mt-1" id="error_user_phone"></p>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-sm-12 mb-3">
                                    <label class="form-label text-white">Address<em class="text-danger"> * </em></label>
                                    <textarea class="form-control" rows="3" id="user_address" name="user_address"><?= (isset($item['user_address'])) ? $item['user_address'] : false; ?></textarea>
                                    <p class="text-danger mt-1" id="error_user_address"></p>
                                  </div>
                                  <div class="col-lg-12 col-sm-12">
                                    <label class="form-label text-white">Note</label>
                                    <textarea class="form-control" rows="3" name="note"></textarea>
                                  </div>
                                  <input type="hidden" value="<?= $item['user_id'] ?>" name="user_id">
                                <?php }; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="checkout-item">
                      <div class="avatar checkout-icon p-1">
                        <div class="avatar-title rounded-circle bg-primary">
                          <i class="fa-solid fa-file-invoice-dollar text-white font-size-20"></i>
                        </div>
                      </div>
                      <div class="feed-item-list">
                        <div>
                          <h4 class="font-size-16 mb-3 ms-0">Payment Info</h4>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-lg-4 col-sm-4">
                              <div data-bs-toggle="collapse">
                                <button class="card-radio text-center text-truncate small p-0" type="submit" name="redirect" id="">
                                  <span class="card-radio text-center text-truncate small">
                                    <img src="<?= _WEB_ROOT ?>/public/assets/client/images/vnpay.png" alt="" style="width: 30%;">
                                  </span>
                                </button>
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                              <div data-bs-toggle="collapse">
                                <button class="card-radio text-center text-truncate small p-0" type="submit" name="redirect" id="">
                                  <span class="card-radio text-center text-truncate small">
                                    <img src="https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-MoMo-Square-768x768.png" alt="" style="width: 15%;">
                                  </span>
                                </button>
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                              <div>
                                <a class="card-radio-label">
                                  <input type="radio" name="pay-method" id="pay-methodoption3" class="card-radio-input" checked="">
                                  <span class="card-radio text-center text-truncate small">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span>Cash</span>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ol>
                </div>
              </div>
              <div class="row my-4">
                <div class="col">
                  <a href="<?php echo _WEB_ROOT ?>/home" class="btn btn-link text-muted">
                    <i class="fa-solid fa-arrow-left me-1"></i> Continue Shopping </a>
                </div>
              </div> <!-- end row-->
            </div>
            <div class="col-xl-5">
              <div class="card-checkout checkout-order-summary">
                <div class="card-body most-popular mt-0">
                  <div class="mb-3 d-flex justify-content-between align-items-center">
                    <h4 class="font-size-16 mb-0 ms-0">Order Summary</h4>
                    <!-- Code orders -->
                  </div>
                  <div class="table-responsive">
                    <table class="table table-centered mb-0 table-nowrap">
                      <thead>
                        <tr>
                          <th class="border-top-0 text-white small" style="width: 110px;" scope="col">Product</th>
                          <th class="border-top-0 text-white small" scope="col">Product Desc</th>
                          <th class="border-top-0 text-white small" scope="col">Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (isset($_SESSION['cart'])) {
                          foreach ($_SESSION['cart'] as $item) : ?>
                            <tr>
                              <th scope="row"><img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" alt="product-img" title="product-img" style="width: 50px !important; height: 50px !important;" class="avatar-lg rounded"></th>
                              <td>
                                <h6 class="font-size-16 text-truncate ms-0 small" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 150px;"><?= $item['product_name'] ?></h6>
                                <p class="text-white mb-0 mt-1 small">$<?= $item['product_price_reduce'] == null ? $item['product_price'] : $item['product_price_reduce'] ?> x <?= $item['product_quantity'] ?></p>
                              </td>
                              <td class="text-white small">$<?= $item['product_price_reduce'] == null ? $item['product_price'] * $item['product_quantity'] : $item['product_price_reduce'] * $item['product_quantity'] ?></td>
                            </tr>
                        <?php endforeach;
                        } ?>
                        <tr>
                          <td colspan="2" class="pt-3 pb-3">
                            <h4 class="font-size-16 m-0 text-white small">Total:</h4>
                          </td>
                          <td class="text-white pt-3 pb-3 small">
                            $<?= $totalPrice; ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <input type="hidden" value="<?= $totalPrice ?>" name="order_total">
                    <button type="submit" name="payCart" class="btn btn-lg btn-block mt-4" style="background-color: #ec6090; color: #fff;">
                      Payment
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php else : ?>
  <div class="container w-auto">
    <div class="most-popular mt-4">
      <div class="container">
        <form method="post" onsubmit="return validateCheckout()">
          <div class="row mt-4">
            <div class="col-xl-7">
              <div class="card-checkout most-popular mt-0">
                <div class="card-body pb-0">
                  <ol class="activity-checkout mb-0 px-4">
                    <li class="checkout-item">
                      <div class="avatar checkout-icon p-1">
                        <div class="avatar-title rounded-circle bg-primary">
                          <i class="fa-solid fa-file-invoice text-white font-size-20"></i>
                        </div>
                      </div>
                      <div class="feed-item-list">
                        <div>
                          <h4 class="font-size-16 mb-3 ms-0">Billing Info</h4>
                          <div class="mb-3">
                            <div>
                              <div class="row">
                                <?php $item = $getUserGoogle;
                                if (isset($item)) { ?>
                                  <div class="col-lg-12 col-sm-12">
                                    <div class="mb-3">
                                      <label class="form-label text-white">Name<em class="text-danger"> * </em></label>
                                      <input type="text" class="form-control" id="user_name" name="user_name" value="<?= (isset($item['user_name'])) ? $item['user_name'] : false; ?>">
                                      <p class="text-danger mt-1" id="error_user_name"></p>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-sm-12">
                                    <div class="mb-3">
                                      <label class="form-label text-white">Email Address<em class="text-danger"> * </em></label>
                                      <input type="email" class="form-control" id="user_email" name="user_email" value="<?= (isset($item['user_email'])) ? $item['user_email'] : false; ?>">
                                      <p class="text-danger mt-1" id="error_user_email"></p>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-sm-12">
                                    <div class="mb-3">
                                      <label class="form-label text-white">Phone<em class="text-danger"> * </em></label>
                                      <input type="text" class="form-control" id="user_phone" name="user_phone" value="<?= (isset($item['user_phone'])) ? $item['user_phone'] : false; ?>">
                                      <p class="text-danger mt-1" id="error_user_phone"></p>
                                    </div>
                                  </div>
                                  <div class="col-lg-12 col-sm-12 mb-3">
                                    <label class="form-label text-white">Address<em class="text-danger"> * </em></label>
                                    <textarea class="form-control" rows="3" id="user_address" name="user_address"><?= (isset($item['user_address'])) ? $item['user_address'] : false; ?></textarea>
                                    <p class="text-danger mt-1" id="error_user_address"></p>
                                  </div>
                                  <div class="col-lg-12 col-sm-12">
                                    <label class="form-label text-white">Note</label>
                                    <textarea class="form-control" rows="3" name="note"></textarea>
                                  </div>
                                  <input type="hidden" value="<?= $item['user_id'] ?>" name="user_id">
                                <?php }; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="checkout-item">
                      <div class="avatar checkout-icon p-1">
                        <div class="avatar-title rounded-circle bg-primary">
                          <i class="fa-solid fa-file-invoice-dollar text-white font-size-20"></i>
                        </div>
                      </div>
                      <div class="feed-item-list">
                        <div>
                          <h4 class="font-size-16 mb-3 ms-0">Payment Info</h4>
                        </div>
                        <div>
                          <div class="row">
                            <div class="col-lg-4 col-sm-4">
                              <div data-bs-toggle="collapse">
                                <button class="card-radio text-center text-truncate small p-0" type="submit" name="redirect" id="">
                                  <span class="card-radio text-center text-truncate small">
                                    <img src="<?= _WEB_ROOT ?>/public/assets/client/images/vnpay.png" alt="" style="width: 30%;">
                                  </span>
                                </button>
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                              <div data-bs-toggle="collapse">
                                <button class="card-radio text-center text-truncate small p-0" type="submit" name="redirect" id="">
                                  <span class="card-radio text-center text-truncate small">
                                    <img src="https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-MoMo-Square-768x768.png" alt="" style="width: 15%;">
                                  </span>
                                </button>
                              </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                              <div>
                                <a class="card-radio-label">
                                  <input type="radio" name="pay-method" id="pay-methodoption3" class="card-radio-input" checked="">
                                  <span class="card-radio text-center text-truncate small">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <span>Cash</span>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ol>
                </div>
              </div>
              <div class="row my-4">
                <div class="col">
                  <a href="<?php echo _WEB_ROOT ?>/home" class="btn btn-link text-muted">
                    <i class="fa-solid fa-arrow-left me-1"></i> Continue Shopping </a>
                </div>
              </div> <!-- end row-->
            </div>
            <div class="col-xl-5">
              <div class="card-checkout checkout-order-summary">
                <div class="card-body most-popular mt-0">
                  <div class="mb-3 d-flex justify-content-between align-items-center">
                    <h4 class="font-size-16 mb-0 ms-0">Order Summary</h4>
                    <!-- Code orders -->
                  </div>
                  <div class="table-responsive">
                    <table class="table table-centered mb-0 table-nowrap">
                      <thead>
                        <tr>
                          <th class="border-top-0 text-white small" style="width: 110px;" scope="col">Product</th>
                          <th class="border-top-0 text-white small" scope="col">Product Desc</th>
                          <th class="border-top-0 text-white small" scope="col">Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (isset($_SESSION['cart'])) {
                          foreach ($_SESSION['cart'] as $item) : ?>
                            <tr>
                              <th scope="row"><img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" alt="product-img" title="product-img" style="width: 50px !important; height: 50px !important;" class="avatar-lg rounded"></th>
                              <td>
                                <h6 class="font-size-16 text-truncate ms-0 small" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 150px;"><?= $item['product_name'] ?></h6>
                                <p class="text-white mb-0 mt-1 small">$<?= $item['product_price_reduce'] == null ? $item['product_price'] : $item['product_price_reduce'] ?> x <?= $item['product_quantity'] ?></p>
                              </td>
                              <td class="text-white small">$<?= $item['product_price_reduce'] == null ? $item['product_price'] * $item['product_quantity'] : $item['product_price_reduce'] * $item['product_quantity'] ?></td>
                            </tr>
                        <?php endforeach;
                        } ?>
                        <tr>
                          <td colspan="2" class="pt-3 pb-3">
                            <h4 class="font-size-16 m-0 text-white small">Total:</h4>
                          </td>
                          <td class="text-white pt-3 pb-3 small">
                            $<?= $totalPrice; ?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <input type="hidden" value="<?= $totalPrice ?>" name="order_total">
                    <button type="submit" name="payCart" class="btn btn-lg btn-block mt-4" style="background-color: #ec6090; color: #fff;">
                      Payment
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endif ?>