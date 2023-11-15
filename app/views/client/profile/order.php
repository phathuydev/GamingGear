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
                            <i class="fa fa-user text-light me-2"></i>
                            <a href="<?php echo _WEB_ROOT; ?>/profile" class="mb-0 text-light h6">Thông tin tài
                                khoản</a>
                        </li>
                        <li class="list-group-item align-items-center p-3 bg-dark">
                            <i class="fa fa-shopping-basket text-danger me-2"></i>
                            <a href="<?php echo _WEB_ROOT; ?>/order" class="mb-0 text-danger h6">Quản lý đơn hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 bg-dark rounded border-light">
            <div class="card-body border-light">
                <div class="row text-light">
                    <div class="row">
                        <h3 class="text-light">Quản lý đơn hàng</h3>
                        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav bg-dark text-light ">
                                        <li class="nav-item">
                                            <a class="nav-link active text-light" href="#">Tất cả đơn hàng</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-light" href="#">Đơn hàng đã hủy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="d-flex flex-column text-center">
                    <div class="card-body bg-dark">
                        <div class="row d-flex justify-content-center  ">
                            <div class="message">
                                <i class="fa fa-store-slash fa-2xl text-light"></i><br> <br>
                                <p class="text-light">Quý khách chưa có đơn hàng nào.</p><br>
                                <a href="<?php echo _WEB_ROOT; ?>/products">
                                    <button class="text-white rounded-2 p-1 h6"
                                            style="background-color: #ec6090; color: #fff;">Tiếp tục mua hàng
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</section>