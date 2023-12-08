<?php if (!empty(Session::data('client_login'))) : ?>
  <div class="container w-auto">
    <div class="most-popular p-5 mt-4">
      <section class="rounded m-0 mt-4">
        <div class="rounded-3 border-light">
          <ol class="breadcrumb mb-0 bg-dark border-light">
            <li class="breadcrumb-item text-light"><a href="<?php echo _WEB_ROOT; ?>/home" class="h6">Home</a></li>
            <li class="breadcrumb-item text-light">Profile</li>
          </ol>
        </div>

        <div class="row m-0">
          <div class="col-lg-4 ps-0">
            <div class="mb-4">
              <div class="card-body text-center bg-dark rounded-3">
                <img src="<?= ($getUserClient['user_image_path'] ?  _WEB_ROOT . '/' . $getUserClient['user_image_path'] . $getUserClient['user_image'] : $getUserClient['user_image']) ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
              </div>
            </div>
            <div class="mb-4 mb-lg-0">
              <div class="card-body rounded-3 p-1 bg-dark">
                <div class="list-group list-group-flush text-center">
                  <div class="nav flex-column nav-pills">
                    <a href="<?php echo _WEB_ROOT ?>/profile/index/1" class="nav-link h6 <?= $tab == 1 ? 'active' : false; ?> text-white"><i class="fa fa-user text-light me-2"></i> Profile</a>
                    <a href="<?php echo _WEB_ROOT ?>/profile/index/2/1" class="nav-link mb-2 h6 <?= $tab == 2 ? 'active' : false; ?> text-white"><i class="fa fa-shopping-basket text-light me-2"></i> Order History</a>
                    <a href="<?php echo _WEB_ROOT ?>/client/account/auth/logout" class="nav-link text-center text-white"><i class="fa fa-right-from-bracket text-light me-2"></i> Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 bg-dark rounded border-light ">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade <?= $tab == 1 ? 'show active' : false; ?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card-body border-light">
                  <div class="row text-light">
                    <form method="post">
                      <h3 class="text-light">Profile</h3><br>
                      <?php echo $updateTrue ? '<p class="text-success mt-3">' . $updateTrue . '</p>' : false ?>
                      <div class="row mt-3">
                        <div class="form-group col-12 align-items-center">
                          <label for="full_name" class="col-form-label mr-5">Avatar</label>
                          <input type="file" class="form-control" name="user_image">
                        </div>
                        <div class="form-group col-12 align-items-center">
                          <label for="full_name" class="col-form-label mr-5">Name</label>
                          <input type="text" class="form-control" id="user_name_client" name="user_name" value="<?= (!empty($getUserClient['user_name'])) ? $getUserClient['user_name'] : '' ?>">
                          <p class="text-danger mt-1" id="error_user_name_client"></p>
                        </div>
                        <div class="form-group col-12 align-items-center">
                          <label for="phone_number" class="col-form-label mr-4">Phone</label>
                          <input for="phone_number" class="form-control" id="user_phone_client" name="user_phone" value="<?= (!empty($getUserClient['user_phone'])) ? $getUserClient['user_phone'] : '' ?>">
                          <p class="text-danger mt-1" id="error_user_phone_client"></p>
                        </div>
                        <div class="form-group col-12 align-items-center">
                          <label class="col-form-label mr-5 ">Email</label>
                          <input class="form-control" value="<?= $getUserClient['user_email'] ?>" disabled>
                        </div>
                        <div class="form-group col-12 align-items-center">
                          <label for="phone_number" class="col-form-label mr-4">Address</label>
                          <textarea for="phone_number" class="form-control" id="user_address_client" name="user_address"><?= (!empty($getUserClient['user_address'])) ? $getUserClient['user_address'] : '' ?></textarea>
                          <p class="text-danger mt-1" id="error_user_address_client"></p>
                        </div>
                        <button type="submit" name="editProfileClient" class="btn btn-danger w-25 mt-2 mx-auto">Cập nhật</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade <?= $tab == 2 ? 'show active' : false; ?>" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="card-body border-light">
                  <div class="row">
                    <div class="col-lg-12">
                      <h3 class="text-light">Order Management</h3>
                    </div>
                    <div class="col-lg-12 mt-3">
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a href="<?php echo _WEB_ROOT ?>/profile/index/2/1" class="nav-link <?= $order == 1 ? 'active' : false; ?> border-0 text-black m-0">All Orders</a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo _WEB_ROOT ?>/profile/index/2/2" class="nav-link <?= $order == 2 ? 'active' : false; ?> border-0 text-black m-0">Order Canceled</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade <?= $order == 1 ? 'show active' : false; ?>" id="order" role="tabpanel" aria-labelledby="order-tab">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <thead>
                                  <tr>
                                    <th class="text-white small text-center">#</th>
                                    <th class="text-white small text-center">Image</th>
                                    <th class="text-white small text-center">Name</th>
                                    <th class="text-white small text-center">Price</th>
                                    <th class="text-white small text-center">Quantity</th>
                                    <th class="text-white small text-center">Total</th>
                                    <th class="text-white small text-center">Status</th>
                                    <th class="text-white small text-center">Action</th>
                                  </tr>
                                </thead>
                                <?php foreach ($getOrderSession as $key => $item) : ?>
                                  <tr>
                                    <td class="text-white small text-center">#<?= $item['code_orders'] ?></td>
                                    <td class="text-white small text-center"><a href="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"><img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" alt="" style="width: 50px;"></a></td>
                                    <td class="text-white small text-center" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 50px;"><?= $item['product_name']; ?></td>
                                    <td class="text-white small text-center">$<?= $item['product_price_reduce'] ? $item['product_price_reduce'] : $item['product_price'] ?></td>
                                    <td class="text-white small text-center"><?= $item['order_quantity']; ?></td>
                                    <td class="text-white small text-center"><?= '$' . $item['order_total_product']; ?></td>
                                    <?php if ($item['order_status_name'] == 'Wait for confirmation') : ?>
                                      <td>
                                        <div class="bg-danger rounded-2 text-center small">Wait for confirmation</div>
                                      </td>
                                    <?php elseif ($item['order_status_name'] == 'Confirmed') : ?>
                                      <td>
                                        <div class="bg-info rounded-2 text-center small">Confirmed</div>
                                      </td>
                                    <?php elseif ($item['order_status_name'] == 'Are preparing') : ?>
                                      <td>
                                        <div class="bg-primary rounded-2 text-center small">Are preparing</div>
                                      </td>
                                    <?php elseif ($item['order_status_name'] == 'Delivering') : ?>
                                      <td>
                                        <div class="bg-warning rounded-2 text-center small">Delivering</div>
                                      </td>
                                    <?php elseif ($item['order_status_name'] == 'Has received the goods') : ?>
                                      <td>
                                        <div class="bg-success rounded-2 text-center small">Has received the goods</div>
                                      </td>
                                    <?php endif ?>
                                    <td class="text-white small text-center">
                                      <button type="button" class="small rounded-2 p-1 bg-primary text-white mb-2 <?= ($item['order_status'] != 1 && $item['order_status'] != 2) ? 'd-none' : '' ?>" data-toggle="modal" data-target="#exampleModal">Edit Address</button>
                                      <butotn type="button" class="small rounded-2 p-1 bg-danger text-white <?= $item['order_status'] != 1 ? 'd-none' : '' ?>" data-toggle="modal" data-target="#exampleModal2">Cancel Order</butotn>
                                    </td>
                                  </tr>
                                  <!-- Edit add ress -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black" id="exampleModalLabel">Edit Adress</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form method="post">
                                          <div class="modal-body">
                                            <div class="mb-3">
                                              <label class="form-label text-black" for="billing-address">Address</label>
                                              <input type="hidden" name="order_id" value="<?= $item['order_id'] ?>">
                                              <textarea class="form-control" name="user_address" rows="3"><?= $item['user_address'] ?></textarea>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="editAddressGoogle" class="btn btn-primary">Apply</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Cancel Order -->
                                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black" id="exampleModalLabel">Cancel Order</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Cancel This Order?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary small" data-dismiss="modal">Close</button>
                                          <form method="post">
                                            <input type="hidden" name="order_detail_id" value="<?= $item['order_detail_id'] ?>">
                                            <button type="submit" name="cancelOrderGoogle" class="btn btn-primary small">Agree</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade <?= $order == 2 ? 'show active' : false; ?>" id="orderFail" role="tabpanel" aria-labelledby="orderFail-tab">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <thead>
                                  <tr>
                                    <th class="text-white small text-center">#</th>
                                    <th class="text-white small text-center">Image</th>
                                    <th class="text-white small text-center">Name</th>
                                    <th class="text-white small text-center">Price</th>
                                    <th class="text-white small text-center">Quantity</th>
                                    <th class="text-white small text-center">Total</th>
                                    <th class="text-white small text-center">Action</th>
                                  </tr>
                                </thead>
                                <?php foreach ($getOrderCancel as $key => $item) : ?>
                                  <tr>
                                    <td class="text-white small text-center">#<?= $item['code_orders'] ?></td>
                                    <td class="text-white small text-center"><a href="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"><img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" alt="" style="width: 50px;"></a></td>
                                    <td class="text-white small text-center" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 50px;"><?= $item['product_name']; ?></td>
                                    <td class="text-white small text-center">$<?= $item['product_price_reduce'] ? $item['product_price_reduce'] : $item['product_price'] ?></td>
                                    <td class="text-white small text-center"><?= $item['order_quantity']; ?></td>
                                    <td class="text-white small text-center"><?= '$' . $item['order_total_product']; ?></td>
                                    <td class="text-white small text-center">
                                      <a href="<?= _WEB_ROOT ?>/client/product/product/product_detail/<?= $item['product_id'] ?>/3/8/1" class="small rounded-2 p-1 bg-primary text-white"><u>Repurchase</u></a>
                                    </td>
                                  </tr>
                                  <!-- Edit add ress -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black" id="exampleModalLabel">Edit Adress</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form method="post">
                                            <div class="mb-3">
                                              <label class="form-label text-black" for="billing-address">Address</label>
                                              <textarea class="form-control" id="billing-address" rows="3"><?= $item['user_address'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" name="editAddress" class="btn btn-primary">Apply</button>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Cancel Order -->
                                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black" id="exampleModalLabel">Cancel Order</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Cancel This Order?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary small" data-dismiss="modal">Close</button>
                                          <form post>
                                            <button type="submit" name="cancelOrder" class="btn btn-primary small">Agree</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php else : ?>
  <div class="container w-auto">
    <div class="most-popular p-5 mt-4">
      <section class="rounded m-0 mt-4">
        <div class="rounded-3 border-light">
          <ol class="breadcrumb mb-0 bg-dark border-light">
            <li class="breadcrumb-item text-light"><a href="<?php echo _WEB_ROOT; ?>/home" class="h6">Home</a></li>
            <li class="breadcrumb-item text-light">Profile</li>
          </ol>
        </div>

        <div class="row m-0">
          <div class="col-lg-4 ps-0">
            <div class="mb-4">
              <div class="card-body text-center bg-dark rounded-3">
                <img src="<?php echo $getUserGoogle['user_image']; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
              </div>
            </div>
            <div class="mb-4 mb-lg-0">
              <div class="card-body rounded-3 p-1 bg-dark">
                <div class="list-group list-group-flush text-center">
                  <div class="nav flex-column nav-pills">
                    <a href="<?php echo _WEB_ROOT ?>/profile/index/1" class="nav-link h6 <?= $tab == 1 ? 'active' : false; ?> text-white"><i class="fa fa-user text-light me-2"></i> Profile</a>
                    <a href="<?php echo _WEB_ROOT ?>/profile/index/2/1" class="nav-link mb-2 h6 <?= $tab == 2 ? 'active' : false; ?> text-white"><i class="fa fa-shopping-basket text-light me-2"></i> Order History</a>
                    <a href="<?php echo _WEB_ROOT ?>/client/account/auth/logout" class="nav-link text-center text-white"><i class="fa fa-right-from-bracket text-light me-2"></i> Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 bg-dark rounded border-light ">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade <?= $tab == 1 ? 'show active' : false; ?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card-body border-light">
                  <div class="row text-light">
                    <form method="post" onsubmit="return validateProfileGoogle()">
                      <h3 class="text-light">Profile</h3><br>
                      <?php echo $updateTrue ? '<p class="text-success mt-3">' . $updateTrue . '</p>' : false ?>
                      <div class="row mt-3">
                        <div class="form-group col-12 align-items-center">
                          <label class="col-form-label mr-5">Name</label>
                          <input class="form-control" value="<?= $getUserGoogle['user_name'] ?>" disabled>
                        </div>
                        <div class="form-group col-12 align-items-center">
                          <label class="col-form-label mr-4">Phone</label>
                          <input class="form-control" type="number" id="user_phone_google" name="user_phone" value="<?= $getUserGoogle['user_phone'] ?>">
                          <p class="text-danger mt-1" id="error_user_phone_google"></p>
                        </div>
                        <div class="form-group col-12 align-items-center">
                          <label class="col-form-label mr-5 ">Email</label>
                          <input class="form-control" value="<?= $getUserGoogle['user_email'] ?>" disabled>
                        </div>
                        <div class="form-group col-12 align-items-center">
                          <label class="col-form-label mr-4">Address</label>
                          <textarea class="form-control" id="user_address_google" name="user_address"><?= $getUserGoogle['user_address'] ?></textarea>
                          <p class="text-danger mt-1" id="error_user_address_google"></p>
                        </div>
                        <button type="submit" name="editProfileGoogle" class="btn btn-danger w-25 mt-2 mx-auto">Cập nhật</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade <?= $tab == 2 ? 'show active' : false; ?>" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="card-body border-light">
                  <div class="row">
                    <div class="col-lg-12">
                      <h3 class="text-light">Order Management</h3>
                    </div>
                    <?php echo $updateAddress ? '<p class="text-success mt-3">' . $updateAddress . '</p>' : false ?>
                    <?php echo $deleteOrder ? '<p class="text-success mt-3">' . $deleteOrder . '</p>' : false ?>
                    <div class="col-lg-12 mt-3">
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a href="<?php echo _WEB_ROOT ?>/profile/index/2/1" class="nav-link <?= $order == 1 ? 'active' : false; ?> border-0 text-black m-0">All Orders</a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo _WEB_ROOT ?>/profile/index/2/2" class="nav-link <?= $order == 2 ? 'active' : false; ?> border-0 text-black m-0">Order Canceled</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade <?= $order == 1 ? 'show active' : false; ?>" id="order" role="tabpanel" aria-labelledby="order-tab">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <thead>
                                  <tr>
                                    <th class="text-white small text-center">#</th>
                                    <th class="text-white small text-center">Image</th>
                                    <th class="text-white small text-center">Name</th>
                                    <th class="text-white small text-center">Price</th>
                                    <th class="text-white small text-center">Quantity</th>
                                    <th class="text-white small text-center">Total</th>
                                    <th class="text-white small text-center">Status</th>
                                    <th class="text-white small text-center">Action</th>
                                  </tr>
                                </thead>
                                <?php foreach ($getOrderSession as $key => $item) : ?>
                                  <tr>
                                    <td class="text-white small text-center">#<?= $item['code_orders'] ?></td>
                                    <td class="text-white small text-center"><a href="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"><img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" alt="" style="width: 50px;"></a></td>
                                    <td class="text-white small text-center" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 50px;"><?= $item['product_name']; ?></td>
                                    <td class="text-white small text-center">$<?= $item['product_price_reduce'] ? $item['product_price_reduce'] : $item['product_price'] ?></td>
                                    <td class="text-white small text-center"><?= $item['order_quantity']; ?></td>
                                    <td class="text-white small text-center"><?= '$' . $item['order_total_product']; ?></td>
                                    <?php if ($item['order_status'] == '1') : ?>
                                      <td>
                                        <div class="bg-danger rounded-2 text-center small">Wait for confirmation</div>
                                      </td>
                                    <?php elseif ($item['order_status'] == '2') : ?>
                                      <td>
                                        <div class="bg-info rounded-2 text-center small">Confirmed</div>
                                      </td>
                                    <?php elseif ($item['order_status'] == '3') : ?>
                                      <td>
                                        <div class="bg-primary rounded-2 text-center small">Are preparing</div>
                                      </td>
                                    <?php elseif ($item['order_status'] == '4') : ?>
                                      <td>
                                        <div class="bg-warning rounded-2 text-center small">Delivering</div>
                                      </td>
                                    <?php elseif ($item['order_status'] == '5') : ?>
                                      <td>
                                        <div class="bg-success rounded-2 text-center small">Has received the goods</div>
                                      </td>
                                    <?php endif ?>
                                    <td class="text-white small text-center">
                                      <button type="button" class="small rounded-2 p-1 bg-primary text-white mb-2 <?= ($item['order_status'] != 1 && $item['order_status'] != 2) ? 'd-none' : '' ?>" data-toggle="modal" data-target="#exampleModal">Edit Address</button>
                                      <butotn type="button" class="small rounded-2 p-1 bg-danger text-white <?= $item['order_status'] != 1 ? 'd-none' : '' ?>" data-toggle="modal" data-target="#exampleModal2">Cancel Order</butotn>
                                    </td>
                                  </tr>
                                  <!-- Edit add ress -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black" id="exampleModalLabel">Edit Adress</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form method="post">
                                          <div class="modal-body">
                                            <div class="mb-3">
                                              <label class="form-label text-black" for="billing-address">Address</label>
                                              <input type="hidden" name="order_id" value="<?= $item['order_id'] ?>">
                                              <textarea class="form-control" name="user_address" rows="3"><?= $item['user_address'] ?></textarea>
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="editAddressGoogle" class="btn btn-primary">Apply</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Cancel Order -->
                                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black" id="exampleModalLabel">Cancel Order</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Cancel This Order?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary small" data-dismiss="modal">Close</button>
                                          <form method="post">
                                            <input type="hidden" name="order_detail_id" value="<?= $item['order_detail_id'] ?>">
                                            <button type="submit" name="cancelOrderGoogle" class="btn btn-primary small">Agree</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane <?= $order == 2 ? 'show active' : false; ?>" id="orderFail" role="tabpanel" aria-labelledby="orderFail-tab">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <thead>
                                  <tr>
                                    <th class="text-white small text-center">#</th>
                                    <th class="text-white small text-center">Image</th>
                                    <th class="text-white small text-center">Name</th>
                                    <th class="text-white small text-center">Price</th>
                                    <th class="text-white small text-center">Quantity</th>
                                    <th class="text-white small text-center">Total</th>
                                    <th class="text-white small text-center">Action</th>
                                  </tr>
                                </thead>
                                <?php foreach ($getOrderCancel as $key => $item) : ?>
                                  <tr>
                                    <td class="text-white small text-center">#<?= $item['code_orders'] ?></td>
                                    <td class="text-white small text-center"><a href="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"><img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" alt="" style="width: 50px;"></a></td>
                                    <td class="text-white small text-center" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 50px;"><?= $item['product_name']; ?></td>
                                    <td class="text-white small text-center">$<?= $item['product_price_reduce'] ? $item['product_price_reduce'] : $item['product_price'] ?></td>
                                    <td class="text-white small text-center"><?= $item['order_quantity']; ?></td>
                                    <td class="text-white small text-center"><?= '$' . $item['order_total_product']; ?></td>
                                    <td class="text-white small text-center">
                                      <a href="<?= _WEB_ROOT ?>/client/product/product/product_detail/<?= $item['product_id'] ?>/3/8/1" class="small rounded-2 p-1 bg-primary text-white"><u>Repurchase</u></a>
                                    </td>
                                  </tr>
                                  <!-- Edit add ress -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black" id="exampleModalLabel">Edit Adress</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form method="post">
                                            <div class="mb-3">
                                              <label class="form-label text-black" for="billing-address">Address</label>
                                              <textarea class="form-control" id="billing-address" rows="3"><?= $item['user_address'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" name="editAddress" class="btn btn-primary">Apply</button>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Cancel Order -->
                                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black" id="exampleModalLabel">Cancel Order</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Cancel This Order?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary small" data-dismiss="modal">Close</button>
                                          <form post>
                                            <button type="submit" name="cancelOrder" class="btn btn-primary small">Agree</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php endif ?>