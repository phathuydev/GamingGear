<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Product</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">#</th>
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
                                                    style="width: 50px !important; height: 50px !important;"></td>
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