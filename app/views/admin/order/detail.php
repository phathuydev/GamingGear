<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail Product</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Image</th>
                        <th class="text-white">Product name</th>
                        <th class="text-white">Quantity</th>
                        <th class="text-white">Product total</th>
                        <th class="text-white border-bottom-0">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($getOrderDetail as $key => $item) : ?>
                        <tr>
                            <td class="text-white"><?= $key + 1 ?></td>
                            <td class="text-white"><img
                                        src="<?= _WEB_ROOT . '/' . $item['productimagepath'] . $item['productimage'] ?>"
                                        alt="" style="width: 50px !important; height: 50px !important;"></td>
                            <td class="text-white"><?= $item['productname'] ?></td>
                            <td class="text-white"><?= $item['orderquantity'] ?></td>
                            <td class="text-white"><?= $item['producttotal'] ?></td>
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
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>