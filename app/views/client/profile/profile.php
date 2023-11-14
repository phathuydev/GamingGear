<section class="rounded" style="background-color:dark;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-dark rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0 bg-dark">
                        <li class="breadcrumb-item text-light"><a href="home">Home</a></li>
                        <li class="breadcrumb-item text-light active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center bg-dark border-dark">
                        <img src="https://i.pinimg.com/474x/19/05/b5/1905b5aa12fceb753fb75cdc0cd21764.jpg" alt="avatar"
                             class="rounded-circle img-fluid" style="width: 150px;">
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0 bg-light">
                    <div class="card-body p-0 bg-dark ">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3 bg-dark">
                                <i class="fa fa-user fa-lg text-danger"></i>
                                <a href="" class="mb-0 text-danger">Thông tin tài khoản</a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3 bg-dark">
                                <i class="fa fa-shopping-basket fa-lg text-light "></i>
                                <a href="order" class="mb-0 text-light">Quản lý đơn hàng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 bg-dark rounded ">
                <div class="card-body">
                    <div class="row bg-dark text-light">
                        <form action="#" method="POST">
                            <h4 class="text-light">Thông tin tài khoản</h4><br>
                            <div class="form-row pl-5">
                                <div class="form-group col-8 d-flex align-items-center">
                                    <label for="full_name" class="col-form-label mr-5">Họ và tên </label>
                                    <input type="text" class="form-control col-6" id="full_name" name="full_name"
                                           required>
                                </div>

                                <div class="form-group col-8 d-flex align-items-center">
                                    <label for="gender" class="col-form-label mr-5">Giới tính</label>
                                    <div class="custom-control custom-radio custom-control-inline  ml-2">
                                        <input type="radio" id="male" name="gender" class="custom-control-input"
                                               value="male" required>
                                        <label class="custom-control-label" for="male">Nam</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="female" name="gender" class="custom-control-input"
                                               value="female" required>
                                        <label class="custom-control-label" for="female">Nữ</label>
                                    </div>
                                </div>

                                <div class="form-group col-8 d-flex align-items-center">
                                    <label for="phone_number" class="col-form-label mr-4">Số điện thoại </label>
                                    <label for="phone_number" class="col-form-label mr-3">*********** </label>
                                </div>

                                <div class="form-group col-8 d-flex align-items-center">
                                    <label for="email" class="col-form-label mr-5 ">Email :</label>
                                    <label for="email" class="col-form-label ml-4"> gaminggear@fpt.edu.vn</label>
                                </div>

                                <div class="form-group col-8 d-flex align-items-center">
                                    <label for="birthday" class="col-form-label mr-3 ">Ngày sinh </label>
                                    <input type="date" class="form-control ml-5" id="birthday" name="birthday" required>
                                </div>
                        </form>
                    </div>
                    <button type="submit" class="btn btn-danger mx-auto" style="width: 100px;">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>