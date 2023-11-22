<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Banner</h4>
            <ul class="nav nav-pills border-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active h6" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Products
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link h6" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Home
                    </button>
                </li>


            </ul>
            <div class="tab-content border-0" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-white">ID</th>
                                <th class="text-white">Role</th>
                                <th class="text-white">Image</th>
                                <th class="text-white">Name</th>
                                <th class="text-white">Email</th>
                                <th class="text-white">Phone</th>
                                <th class="text-white">Address</th>
                                <th class="text-white">Status</th>
                                <th class="text-white border-bottom-0">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="text-white"></td>
                                <td class="text-white"></td>
                                <td class="text-white"><img src="<? _WEB_ROOT . '/' ?>" alt=""
                                                            style="width: 50px !important; height: 50px !important;">
                                </td>
                                <td class="text-white"></td>
                                <td class="text-white"></td>
                                <td class="text-white"></td>
                                <td class="text-white"></td>
                                <td class="text-white"></td>
                                <td class="d-flex align-items-center pt-4">
                                    <a class="badge badge-primary mr-2"
                                       href="<?php echo _MANAGE_DEFAULT ?>/product/product_edit">Edit</a>
                                    <form method="post" class="m-0">
                                        <input type="hidden" name="user_id" value="">
                                        <input type="hidden" name="is_delete" value="1">
                                        <input type="hidden" name="user_delete" value="1">
                                        <input type="hidden" name="create_at" value="">
                                        <input type="hidden" name="update_at" value="">
                                        <input type="hidden" name="user_create" value="">
                                        <input type="hidden" name="user_update" value="">
                                        <button type="submit" name="" class="badge badge-danger border-0"
                                                onclick="return confirm('Delete product ...');">Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>