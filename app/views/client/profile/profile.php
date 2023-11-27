<div class="container w-auto">
    <div class="most-popular">
        <section class="rounded m-0">
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
                    <img src="https://i.pinimg.com/474x/19/05/b5/1905b5aa12fceb753fb75cdc0cd21764.jpg" alt="avatar"
                         class="rounded-circle img-fluid" style="width: 150px;">
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
                                <h3 class="text-light">Thông tin tài khoản</h3><br><br>
                                <div class="row">
                                    <div class="form-group col-12 align-items-center">
                                        <label for="full_name" class="col-form-label mr-5">Họ và tên</label>
                                        <input type="text" class="form-control" id="full_name" name="username"
                                               value="Nguyễn Văn Tèo">
                                    </div>

                                    <div class="form-group col-12 align-items-center">
                                        <label for="phone_number" class="col-form-label mr-4">Số điện thoại</label>
                                        <input for="phone_number" class="form-control" value="0123456789">
                                    </div>

                                    <div class="form-group col-12 align-items-center">
                                        <label for="email" class="col-form-label mr-5 ">Email</label>
                                        <input for="email" class="form-control" value="xyz@gmail.com">
                                    </div>

                                    <div class="form-group col-12 align-items-center">
                                        <label for="phone_number" class="col-form-label mr-4">Địa chỉ</label>
                                        <textarea for="phone_number" class="form-control"></textarea>
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
                                <h3 class="text-light">Quản lý đơn hàng</h3>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-0 text-black m-0" id="order-tab"
                                           data-toggle="tab" href="#order" role="tab" aria-controls="order"
                                           aria-selected="true">Tất cả đơn hàng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link border-0 text-black m-0" id="orderFail-tab" data-toggle="tab"
                                           href="#orderFail" role="tab" aria-controls="orderFail" aria-selected="false">Đơn
                                            hàng đã hủy</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="order" role="tabpanel"
                                         aria-labelledby="order-tab">
                                        <div class="message text-center mt-5">
                                            <i class="fa fa-store-slash fa-2xl text-light"></i><br> <br>
                                            <p class="text-light">Quý khách chưa có đơn hàng nào.</p><br>
                                            <a href="<?php echo _WEB_ROOT; ?>/products">
                                                <button class="text-white rounded-2 p-1 h6"
                                                        style="background-color: #ec6090; color: #fff;">Tiếp tục mua
                                                    hàng
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orderFail" role="tabpanel"
                                         aria-labelledby="orderFail-tab">
                                        <div class="message text-center mt-5">
                                            <i class="fa fa-store-slash fa-2xl text-light"></i><br> <br>
                                            <p class="text-light">Quý khách chưa hủy đơn hàng nào.</p><br>
                                            <a href="<?php echo _WEB_ROOT; ?>/products">
                                                <button class="text-white rounded-2 p-1 h6"
                                                        style="background-color: #ec6090; color: #fff;">Tiếp tục mua
                                                    hàng
                                                </button>
                                            </a>
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