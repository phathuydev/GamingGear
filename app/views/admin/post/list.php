<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Post</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">Image Representing</th>
                        <th class="text-white">Category</th>
                        <th class="text-white">Create Date</th>
                        <th class="text-white">Update Date</th>
                        <th class="text-white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listPost as $key => $item) : ?>
                        <tr class="border-bottom">
                            <td class="text-white"><img
                                        src="<?= $item['post_image'] == true ? _WEB_ROOT . '/' . $item['post_image_path'] . $item['post_image'] : _WEB_ROOT . '/' . $item['post_image_path'] . 'default_img.jpg'; ?>"
                                        alt=""
                                        style="width: 100px !important; height: 50px !important; border-radius: 0;">
                            </td>
                            <td class="text-white"><?= $item['category_name']; ?></td>
                            <td class="text-white"><?= formatTimeAgo(strtotime($item['create_at'])); ?></td>
                            <td class="text-white"><?= formatTimeAgo(strtotime($item['update_at'])); ?></td>
                            <td class="d-flex align-items-center pt-4">
                                <a class="badge badge-primary mr-2"
                                   href="<? echo _MANAGE_DEFAULT ?>/post/post_detail/<?= $item['post_id'] ?>">See
                                    Detail</a>
                                <a class="badge badge-primary mr-2"
                                   href="<? echo _MANAGE_DEFAULT ?>/post/post_edit/<?= $item['post_id'] ?>/<?= $item['post_detail_id'] ?>">Edit</a>
                                <form method="post" class="m-0">
                                    <input type="hidden" name="post_id" value="<?= $item['post_id'] ?>">
                                    <input type="hidden" name="post_detail_id" value="<?= $item['post_detail_id'] ?>">
                                    <button type="submit" name="updateIsdelete" class="badge badge-danger border-0"
                                            onclick="return confirm('Delete post <?= '#' . $item['post_id'] ?>');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="float-right mt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end pagination-sm">
                            <li class="page-item <?= $pages < 3 ? 'd-none' : false; ?>"><a class="page-link"
                                                                                           href="<?php echo _MANAGE_DEFAULT ?>/post/list/<?= $per_pages; ?>/<?= 1; ?>"
                                                                                           tabindex="-1">Previous</a>
                            </li>
                            <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a class="page-link"
                                                                                                     href="<?php echo _MANAGE_DEFAULT ?>/post/list/<?= $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a>
                                </li>
                            <?php } ?>
                            <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a
                                        class="page-link"
                                        href="<?php echo _MANAGE_DEFAULT ?>/post/list/<?= $per_pages; ?>/<?= $pages + 1; ?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>