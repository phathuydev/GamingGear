<section class="rounded m-0">
    <div class="bg-dark rounded-3 p-3 mb-4 border-light">
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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item align-items-center p-3 bg-dark">
                            <i class="fa fa-user text-danger me-2"></i>
                            <a href="<?php echo _WEB_ROOT; ?>/profile" class="mb-0 text-danger h6">Thông tin tài
                                khoản</a>
                        </li>
                        <li class="list-group-item align-items-center p-3 bg-dark">
                            <i class="fa fa-shopping-basket text-light me-2"></i>
                            <a href="<?php echo _WEB_ROOT; ?>/order" class="mb-0 text-light h6">Quản lý đơn hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 bg-dark rounded border-light ">
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
                    </form>
        </div>
            </div>
    </div>
    </div>
</section>