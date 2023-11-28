<div class="container w-auto">
    <div class="most-popular mt-4">
        <div class="container">
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
                                                <form>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-white"
                                                                           for="billing-name">Name</label>
                                                                    <input type="text" class="form-control"
                                                                           id="billing-name" placeholder="Enter name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-white"
                                                                           for="billing-email-address">Email
                                                                        Address</label>
                                                                    <input type="email" class="form-control"
                                                                           id="billing-email-address"
                                                                           placeholder="Enter email">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-white"
                                                                           for="billing-phone">Phone</label>
                                                                    <input type="text" class="form-control"
                                                                           id="billing-phone"
                                                                           placeholder="Enter Phone no.">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label text-white" for="billing-address">Address</label>
                                                            <textarea class="form-control" id="billing-address" rows="3"
                                                                      placeholder="Enter full address"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
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
                                                <div class="col-lg-6 col-sm-6">
                                                    <div data-bs-toggle="collapse">
                                                        <a href="" class="card-radio-label">
                                                            <input type="radio" name="pay-method" id="pay-methodoption1"
                                                                   class="card-radio-input">
                                                            <span class="card-radio text-center text-truncate small">
                                <img src="<?= _WEB_ROOT ?>/public/assets/client/images/vnpay.png" alt=""
                                     style="width: 30%;">
                              </span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6">
                                                    <div>
                                                        <a class="card-radio-label">
                                                            <input type="radio" name="pay-method" id="pay-methodoption3"
                                                                   class="card-radio-input" checked="">
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
                                <span class="float-end ms-2 text-white">#MN0124</span>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0 text-white small" style="width: 110px;" scope="col">
                                            Product
                                        </th>
                                        <th class="border-top-0 text-white small" scope="col">Product Desc</th>
                                        <th class="border-top-0 text-white small" scope="col">Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><img
                                                    src="https://pc-laptop-center.com/images/product_images/original_images/GamerTastaturweiss.jpg"
                                                    alt="product-img" title="product-img" class="avatar-lg rounded">
                                        </th>
                                        <td>
                                            <h6 class="font-size-16 text-truncate ms-0 small"
                                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 150px;">
                                                Waterproof Mobile Phone</h6>
                                            <p class="text-white mb-0 mt-1 small">$ 260 x 2</p>
                                        </td>
                                        <td class="text-white small">$520</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="pt-3 pb-3">
                                            <h4 class="font-size-16 m-0 text-white small">Total:</h4>
                                        </td>
                                        <td class="text-white pt-3 pb-3 small">
                                            $745
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="<?php echo _WEB_ROOT; ?>/carts/thanks" class="btn btn-lg btn-block mt-5"
                                   style="background-color: #ec6090; color: #fff;">
                                    Payment
                                </a>
                            </div>
                        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>