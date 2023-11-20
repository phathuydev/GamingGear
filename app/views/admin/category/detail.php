<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Category</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Id</th>
                        <th class="text-white">Image</th>
                        <th class="text-white">Name</th>
                        <th class="text-white border-bottom-0">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listCategory as $key => $item) : ?>
                        <tr>
                            <td class="text-white"><?= $key + 1; ?></td>
                            <td class="text-white"><?= $item['category_id']; ?></td>
                            <td class="text-white"><img
                                        src="<?= $item['category_image'] == true ? _WEB_ROOT . '/' . $item['category_image_path'] . $item['category_image'] : _WEB_ROOT . '/' . $item['category_image_path'] . 'default_img.jpg'; ?>"
                                        alt="" style="width: 50px !important; height: 50px !important;"></td>
                            <td class="text-white"><?= $item['category_name']; ?></td>
                            <td class="d-flex align-items-center pt-4">
                                <a class="badge badge-primary mr-2"
                                   href="<? echo _MANAGE_DEFAULT ?>/category/category_edit/<?= $item['category_id'] ?>">Edit</a>
                                <form method="post" class="m-0">
                                    <input type="hidden" name="category_id" value="<?= $item['category_id'] ?>">
                                    <input type="hidden" name="is_delete" value="1">
                                    <input type="hidden" name="category_delete" value="1">
                                    <input type="hidden" name="create_at" value="<?= $item['create_at'] ?>">
                                    <input type="hidden" name="update_at" value="<?= date("Y-m-d H:i:s") ?>">
                                    <button type="submit" name="updateIsdelete" class="badge badge-danger border-0"
                                            onclick="return confirm('Delete category <?= $item['category_id'] ?>');">
                                        Delete
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