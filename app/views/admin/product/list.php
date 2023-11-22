<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Products</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Name</th>
                        <th class="text-white">Image</th>
                        <th class="text-white">Price</th>
                        <th class="text-white">Sale</th>
                        <th class="text-white">Quantity</th>
                        <th class="text-white">Category</th>
                        <th class="text-white">View</th>
                        <th class="text-white">Special</th>
                        <th class="text-white pl-4">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listProduct as $key => $item): ?>
                        <tr>
                            <td class="text-white">
                                <?= $key + 1; ?>
                            </td>
                            <td class="text-white">
                                <?= $item['product_name'] ?>
                            </td>
                            <td class="text-white"><img
                                        src="<?= $item['product_image'] == true ? _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] : _WEB_ROOT . '/' . $item['product_image_path'] . 'default_img.jpg'; ?>"
                                        alt="" style="width: 50px !important; height: 50px !important;"></td>
                            <td class="text-white">
                                <?= $item['product_price'] ?>
                            </td>
                            <td class="text-white">
                                <?= $item['product_price_reduce'] ?>
                            </td>
                            <td class="text-white">
                                <?= $item['product_quantity'] ?>
                            </td>
                            <td class="text-white">
                                <?= $item['product_category'] ?>
                            </td>
                            <td class="text-white">
                                <?= $item['product_describe'] ?>
                            </td>
                            <td class="text-white">
                                <?= $item['product_special'] ?>
                            </td>
                            <td class="d-flex align-items-center pt-4">
                                <a class="badge badge-primary mr-2"
                                   href="<? echo _MANAGE_DEFAULT ?>/product/product_edit/<?= $item['product_id'] ?>">Edit</a>
                                <form action="" method="post" class="m-0">
                                    <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                                    <input type="hidden" name="is_delete" value="1">
                                    <input type="hidden" name="user_delete" value="1">
                                    <input type="hidden" name="create_at" value="<?= $item['create_at'] ?>">
                                    <input type="hidden" name="update_at" value="<?= date("Y-m-d H:i:s") ?>">
                                    <input type="hidden" name="user_create" value="<?= $item['user_create'] ?>">
                                    <input type="hidden" name="user_update" value="<?= '1' ?>">
                                    <button type="submit" name="updateIsdelete" class="badge badge-danger border-0 "
                                            onclick="return confirm('Delete product <?= $item['product_name'] ?>');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>