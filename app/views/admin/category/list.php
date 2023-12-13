<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Category</h4>
            <?php echo isset($checkForeignkey) ? '<p class="text-danger">' . $checkForeignkey . '</p>' : false; ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-white">Image</th>
                            <th class="text-white">Name</th>
                            <th class="text-white">Create Date</th>
                            <th class="text-white">Update Date</th>
                            <th class="text-white">User Create</th>
                            <th class="text-white">User Create</th>
                            <th class="text-white border-bottom-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listCategory as $key => $item) : ?>
                            <tr class="border-bottom">
                                <td class="text-white"><img src="<?= $item['category_image'] == true ? _WEB_ROOT . '/' . $item['category_image_path'] . $item['category_image'] : _WEB_ROOT . '/' . $item['category_image_path'] . 'default_img.jpg'; ?>" alt="" style="width: 50px !important; height: 50px !important;"></td>
                                <td class="text-white"><?= $item['category_name']; ?></td>
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
                                    <a class="badge badge-primary mr-2 <?= $item['is_delete'] == 1 ? 'disabled' : false; ?>" href="<? echo _MANAGE_DEFAULT ?>/category/category_edit/<?= $item['category_id'] ?>">Edit</a>
                                    <form method="post" class="m-0">
                                        <input type="hidden" name="category_id" value="<?= $item['category_id'] ?>">
                                        <button type="submit" name="<?= $item['is_delete'] == 0 ? 'deleteCategory' : 'restoreCategory' ?>" class="badge badge-<?= $item['is_delete'] == 0 ? 'danger' : 'success' ?> border-0" 
                                        onclick="return confirm('<?= $item['is_delete'] == 0 ? 'Delete' : 'Restore' ?> Category <?= $item['category_name'] ?>');"><?= $item['is_delete'] == 0 ? 'Delete' : 'Restore' ?></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="float-left m-3 mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end pagination-sm">
                            <li class="page-item <?= $pages < 3 ? 'd-none' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/category/list/<?= $per_pages; ?>/<?= 1; ?>" tabindex="-1">Previous</a>
                            </li>
                            <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/category/list/<?= $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a>
                                </li>
                            <?php } ?>
                            <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/category/list/<?= $per_pages; ?>/<?= $pages + 1; ?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>