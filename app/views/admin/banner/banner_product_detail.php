<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Comment Product Detail</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-white">Image</th>
                            <th class="text-white">Create Date</th>
                            <th class="text-white">Update Date</th>
                            <th class="text-white">User Create</th>
                            <th class="text-white">User Update</th>
                            <th class="text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getBannerProductDetail as $key => $item) : ?>
                            <tr>
                                <td class="text-white"><img src="<?= _WEB_ROOT . '/' . $item['banner_product_path'] . ($item['banner_product_image']); ?>" alt="" style="width: 50px !important; height: 50px !important;border-radius: 0;"></td>
                                <td class="text-white"><?= formatTimeAgo(strtotime($item['create_at'])); ?></td>
                                <td class="text-white"><?= formatTimeAgo(strtotime($item['update_at'])); ?></td>
                                <?php $getUserCreate = $this->model('UserModel')->getUserCreate($item['user_create']);
                                $data = $getUserCreate;
                                if (isset($data)) {
                                ?>
                                    <td class="text-white"><?= !empty($data['user_name']) == null ? $data['user_email'] : $data['user_name'] ?></td>
                                <?php } ?>
                                <?php $getUserUpdate = $this->model('UserModel')->getUserUpdate($item['user_update']);
                                $data2 = $getUserUpdate;
                                if (isset($data2)) {
                                ?>
                                    <td class="text-white"><?= !empty($data2['user_name']) == null ? $data2['user_email'] : $data2['user_name'] ?></td>
                                <?php } ?>
                                <td class="d-flex align-items-center pt-4">
                                    <a class="badge badge-primary mr-2" href="<? echo _MANAGE_DEFAULT ?>/banner/banner_product_edit/<?= $item['banner_product_id'] ?>">Edit</a>
                                    <form method="post" class="m-0">
                                        <input type="hidden" name="banner_product_id" value="<?= $item['banner_product_id'] ?>">
                                        <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                                        <button type="submit" class="badge badge-danger border-0" onclick="return confirm('Delete Comment <?= $item['banner_product_id'] ?>');">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>