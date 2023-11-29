<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Comment</h4>
            <ul class="nav nav-pills border-0 p-0 pb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="<?= _WEB_ROOT ?>/admin/manage/comment/list/1" class="text-decoration-none text-black">
                        <button class="nav-link <?= $tab == 1 ? 'active' : false; ?> h6" id="pills-home-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                aria-controls="pills-home" aria-selected="true">Products
                        </button>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="<?= _WEB_ROOT ?>/admin/manage/comment/list/2" class="text-decoration-none text-black">
                        <button class="nav-link <?= $tab == 2 ? 'active' : false; ?> h6" id="pills-profile-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Post
                        </button>
                    </a>
                </li>
            </ul>
            <div class="tab-content border-0 p-0" id="pills-tabContent">
                <div class="tab-pane fade <?= $tab == 1 ? 'show active' : false; ?>" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-white">Image Product</th>
                                <th class="text-white">Name Product</th>
                                <th class="text-white">Total Comment</th>
                                <th class="text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getAllCommentProduct as $key => $item) : ?>
                                <tr class="border-bottom">
                                    <td class="text-white"><img
                                                src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                                                alt="" style="width: 50px !important; height: 50px !important;"></td>
                                    <td class="text-white"><?= $item['product_name'] ?></td>
                                    <td class="text-white"><?= $item['count_comment_product'] ?></td>
                                    <td class="text-white">
                                        <a class="badge badge-primary mr-2"
                                           href="<?php echo _MANAGE_DEFAULT ?>/comment/comment_product_detail/<?= $item['product_id'] ?>/8/1">See
                                            Details</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade <?= $tab == 2 ? 'show active' : false; ?>" id="pills-profile" role="tabpanel"
                     aria-labelledby="pills-profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-white">Image Post</th>
                                <th class="text-white">Total Comment</th>
                                <th class="text-white">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getAllCommentPost as $key => $item) : ?>
                                <tr>
                                    <td class="text-white"><img
                                                src="<?= _WEB_ROOT . '/' . $item['post_image_path'] . $item['post_image'] ?>"
                                                alt=""
                                                style="width: 100px !important; height: 50px !important; border-radius: 0px;">
                                    </td>
                                    <td class="text-white"><?= $item['count_comment_post'] ?></td>
                                    <td class="text-white">
                                        <a class="badge badge-primary mr-2"
                                           href="<?php echo _MANAGE_DEFAULT ?>/comment/comment_post_detail/<?= $item['post_id'] ?>/8/1">See
                                            Details</a>
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