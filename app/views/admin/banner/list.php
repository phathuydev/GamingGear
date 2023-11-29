<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Banner</h4>
            <ul class="nav nav-pills border-0 p-0 pb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="<?= _WEB_ROOT ?>/admin/manage/banner/list/1/8/1" class="text-decoration-none text-black">
                        <button class="nav-link <?= $tab == 1 ? 'active' : false; ?> h6" id="pills-home-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                aria-controls="pills-home" aria-selected="true">Banner home
                        </button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="<?= _WEB_ROOT ?>/admin/manage/banner/list/2" class="text-decoration-none text-black">
                        <button class="nav-link <?= $tab == 2 ? 'active' : false; ?> h6" id="pills-profile-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Banner Product
                        </button>
                    </a>
                </li>
            </ul>
            <div class="tab-content border-0 p-0 pb-3" id="pills-tabContent">
                <div class="tab-pane fade <?= $tab == 1 ? 'show active' : false; ?>" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-white">Image Banner Home</th>
                                <th class="text-white">Create Date</th>
                                <th class="text-white">Update Date</th>
                                <th class="text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getBannerHome as $key => $item) : ?>
                                <tr class="border-bottom">
                                    <td class="text-white"><img
                                                src="<?= _WEB_ROOT . '/' . $item['banner_home_path'] . $item['banner_home_image'] ?>"
                                                alt=""
                                                style="width: 100px !important; height: 50px !important;border-radius: 0;">
                                    </td>
                                    <td class="text-white"><?= formatTimeAgo(strtotime($item['create_at'])); ?></td>
                                    <td class="text-white"><?= formatTimeAgo(strtotime($item['update_at'])); ?></td>
                                    <td class="d-flex align-items-center pt-4">
                                        <a class="badge badge-primary mr-2"
                                           href="<? echo _MANAGE_DEFAULT ?>/banner/banner_home_edit/<?= $item['banner_home_id'] ?>">Edit</a>
                                        <form action="" method="post" class="m-0">
                                            <input type="hidden" name="banner_home_id"
                                                   value="<?= $item['banner_home_id'] ?>">
                                            <button type="submit" class="badge badge-danger border-0 "
                                                    onclick="return confirm('Delete banner <?= $item['banner_home_id'] ?>');">
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
                                                                                                   href="<?php echo _MANAGE_DEFAULT ?>/banner/list/1/<?= $per_pages; ?>/<?= 1; ?>"
                                                                                                   tabindex="-1">Previous</a>
                                    </li>
                                    <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                        <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a
                                                    class="page-link"
                                                    href="<?php echo _MANAGE_DEFAULT ?>/banner/list/1/<?= $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a>
                                        </li>
                                    <?php } ?>
                                    <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a
                                                class="page-link"
                                                href="<?php echo _MANAGE_DEFAULT ?>/banner/list/1/<?= $per_pages; ?>/<?= $pages + 1; ?>">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade <?= $tab == 2 ? 'show active' : false; ?>" id="pills-profile" role="tabpanel"
                     aria-labelledby="pills-profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">Image</th>
                                <th class="text-white">Product Name</th>
                                <th class="text-white">Total Banner</th>
                                <th class="text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getBannerProduct as $key => $data) : ?>
                                <tr class="border-bottom">
                                    <td class="text-white"><?= $key + 1; ?></td>
                                    <td class="text-white"><img
                                                src="<?= _WEB_ROOT . '/' . $data['product_image_path'] . $data['product_image'] ?>"
                                                alt=""
                                                style="width: 50px !important; height: 50px !important; border-radius: 0px;">
                                    </td>
                                    <td class="text-white"><?= $data['product_name'] ?></td>
                                    <td class="text-white"><?= $data['count_banner_product'] ?></td>
                                    <td class="text-white">
                                        <a class="badge badge-primary mr-1"
                                           href="<?php echo _MANAGE_DEFAULT ?>/banner/banner_product_detail/<?= $data['product_id'] ?>">See
                                            Details</a>
                                        <a class="badge badge-success"
                                           href="<? echo _MANAGE_DEFAULT ?>/banner/banner_product_add/<?= $data['product_id'] ?>">Add</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>