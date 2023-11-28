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
                    <img src="<?php echo _WEB_ROOT . '/' . $getUserClient['user_image_path'] . $getUserClient['user_image']; ?>"
                         alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                </div>
            </div>
            <div class="mb-4 mb-lg-0">
                <div class="card-body rounded-3 p-1 bg-dark">
                    <div class="list-group list-group-flush">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <button class="nav-link active mb-2 text-white" id="v-pills-home-tab" data-toggle="pill"
                                    data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true"><i class="fa fa-user text-light me-2"></i> Profile
                            </button>
                            <button class="nav-link mb-2 text-white" id="v-pills-profile-tab" data-toggle="pill"
                                    data-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false"><i
                                        class="fa fa-shopping-basket text-light me-2"></i> Order History
                            </button>
                            <a href="<?php echo _WEB_ROOT ?>/client/account/auth/logout"
                               class="nav-link text-center text-white"><i
                                        class="fa fa-right-from-bracket text-light me-2"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 bg-dark rounded border-light ">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="card-body border-light">
                        <div class="row text-light">
                            <form method="post">
                                <h3 class="text-light">Profile</h3><br>
                                <div class="row mt-3">
                                    <div class="form-group col-12 align-items-center">
                                        <label for="full_name" class="col-form-label mr-5">Name<em class="text-danger">
                                                * </em></label>
                                        <input type="text" class="form-control" id="full_name" name="username"
                                               value="<?= $getUserClient['user_name'] ?>">
                                    </div>

                                    <div class="form-group col-12 align-items-center">
                                        <label for="phone_number" class="col-form-label mr-4">Phone<em
                                                    class="text-danger"> * </em></label>
                                        <input for="phone_number" class="form-control"
                                               value="<?= $getUserClient['user_phone'] ?>">
                                    </div>

                                    <div class="form-group col-12 align-items-center">
                                        <label for="email" class="col-form-label mr-5 ">Email<em class="text-danger">
                                                * </em></label>
                                        <input for="email" class="form-control"
                                               value="<?= $getUserClient['user_email'] ?>">
                                    </div>

                                    <div class="form-group col-12 align-items-center">
                                        <label for="phone_number" class="col-form-label mr-4">Address<em
                                                    class="text-danger"> * </em></label>
                                        <textarea for="phone_number" class="form-control"
                                                  value="<?= $getUserClient['user_address'] ?>"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-danger w-25 mt-2 mx-auto">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card-body border-light">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="text-light">Order Management</h3>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-0 text-black m-0" id="order-tab"
                                           data-toggle="tab" href="#order" role="tab" aria-controls="order"
                                           aria-selected="true">All Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border-0 text-black m-0" id="orderFail-tab" data-toggle="tab"
                                           href="#orderFail" role="tab" aria-controls="orderFail" aria-selected="false">Order
                                            Canceled</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="order" role="tabpanel"
                                         aria-labelledby="order-tab">
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
                                                        <td class="text-white small text-center">HN8647</td>
                                                        <td class="text-white small text-center"><a
                                                                    href="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"><img
                                                                        src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                                                                        alt="" style="width: 50px;"></a></td>
                                                        <td class="text-white small text-center"
                                                            style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 50px;"><?= $item['product_name']; ?></td>
                                                        <td class="text-white small text-center">
                                                            $<?= $item['product_price_reduce'] ? $item['product_price_reduce'] : $item['product_price'] ?></td>
                                                        <td class="text-white small text-center"><?= $item['order_quantity']; ?></td>
                                                        <td class="text-white small text-center"><?= '$' . $item['order_total_product']; ?></td>
                                                        <?php if ($item['order_status_name'] == 'Wait for confirmation') : ?>
                                                            <td>
                                                                <div class="bg-danger rounded-2 text-center small">Wait
                                                                    for confirmation
                                                                </div>
                                                            </td>
                                                        <?php elseif ($item['order_status_name'] == 'Confirmed') : ?>
                                                            <td>
                                                                <div class="bg-info rounded-2 text-center small">
                                                                    Confirmed
                                                                </div>
                                                            </td>
                                                        <?php elseif ($item['order_status_name'] == 'Are preparing') : ?>
                                                            <td>
                                                                <div class="bg-primary rounded-2 text-center small">Are
                                                                    preparing
                                                                </div>
                                                            </td>
                                                        <?php elseif ($item['order_status_name'] == 'Delivering') : ?>
                                                            <td>
                                                                <div class="bg-warning rounded-2 text-center small">
                                                                    Delivering
                                                                </div>
                                                            </td>
                                                        <?php elseif ($item['order_status_name'] == 'Has received the goods') : ?>
                                                            <td>
                                                                <div class="bg-success rounded-2 text-center small">Has
                                                                    received the goods
                                                                </div>
                                                            </td>
                                                        <?php endif ?>
                                                        <td class="text-white small text-center">
                                                            <button type="button"
                                                                    class="small rounded-2 p-1 bg-primary text-white mb-2"
                                                                    data-toggle="modal" data-target="#exampleModal"><u>Edit
                                                                    Address</u></button>
                                                            <form method="post">
                                                                <butotn type="submit" name="cancelOrder"
                                                                        class="small rounded-2 p-1 bg-danger text-white"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModal2"><u>Cancel Order</u>
                                                                </butotn>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <!-- Edit add ress -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                         role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-black"
                                                                        id="exampleModalLabel">Edit Adress</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post">
                                                                        <div class="mb-3">
                                                                            <label class="form-label text-black"
                                                                                   for="billing-address">Address</label>
                                                                            <textarea class="form-control"
                                                                                      id="billing-address"
                                                                                      rows="3"><?= $item['user_address'] ?></textarea>
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                    <button type="submit" name="editAddress"
                                                                            class="btn btn-primary">Apply
                                                                    </button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Cancel Order -->
                                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                                         role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-black"
                                                                        id="exampleModalLabel">Cancel Order</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Cancel This Order?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-secondary small"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                    <form post>
                                                                        <button type="submit" name="cancelOrder"
                                                                                class="btn btn-primary small">Agree
                                                                        </button>
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
                                    <div class="tab-pane fade" id="orderFail" role="tabpanel"
                                         aria-labelledby="orderFail-tab">
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
                                                        <td class="text-white small text-center">HN8647</td>
                                                        <td class="text-white small text-center"><a
                                                                    href="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"><img
                                                                        src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                                                                        alt="" style="width: 50px;"></a></td>
                                                        <td class="text-white small text-center"
                                                            style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 50px;"><?= $item['product_name']; ?></td>
                                                        <td class="text-white small text-center">
                                                            $<?= $item['product_price_reduce'] ? $item['product_price_reduce'] : $item['product_price'] ?></td>
                                                        <td class="text-white small text-center"><?= $item['order_quantity']; ?></td>
                                                        <td class="text-white small text-center"><?= '$' . $item['order_total_product']; ?></td>
                                                        <td class="text-white small text-center">
                                                            <a type="button" class="small rounded-2 p-1"><u>Continue
                                                                    Shopping</u></a>
                                                        </td>
                                                    </tr>
                                                    <!-- Edit add ress -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                         role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-black"
                                                                        id="exampleModalLabel">Edit Adress</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="post">
                                                                        <div class="mb-3">
                                                                            <label class="form-label text-black"
                                                                                   for="billing-address">Address</label>
                                                                            <textarea class="form-control"
                                                                                      id="billing-address"
                                                                                      rows="3"><?= $item['user_address'] ?></textarea>
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                    <button type="submit" name="editAddress"
                                                                            class="btn btn-primary">Apply
                                                                    </button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Cancel Order -->
                                                    <div class="modal fade" id="exampleModal2" tabindex="-1"
                                                         role="dialog" aria-labelledby="exampleModalLabel"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-black"
                                                                        id="exampleModalLabel">Cancel Order</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Cancel This Order?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-secondary small"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                    <form post>
                                                                        <button type="submit" name="cancelOrder"
                                                                                class="btn btn-primary small">Agree
                                                                        </button>
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