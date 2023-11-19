<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Comment</h4>
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
                            aria-selected="false">Posts
                    </button>
                </li>
            </ul>
            <div class="tab-content border-0" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">ID Comment</th>
                                <th class="text-white">Image Product</th>
                                <th class="text-white">Name Product</th>
                                <th class="text-white">Total Comment</th>
                                <th class="text-white border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($getCommentProduct as $key => $item) : ?>
                                <tr>
                                    <td class="text-white"><?= $key + 1; ?></td>
                                    <td class="text-white"><?= $item['product_id'] ?></td>
                                    <td class="text-white"><img
                                                src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                                                alt="" style="width: 50px !important; height: 50px !important;"></td>
                                    <td class="text-white"><?= $item['product_name'] ?></td>
                                    <td class="text-white"><?= $item['count_id_product'] ?></td>
                                    <td class="d-flex align-items-center pt-4">
                                        <a class="badge badge-primary mr-2"
                                           href="<?php echo _MANAGE_DEFAULT ?>/product/product_edit">See Details</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-white">#</th>
                                <th class="text-white">ID Post</th>
                                <th class="text-white">Image Post</th>
                                <th class="text-white">Title Post</th>
                                <th class="text-white">Total Post</th>
                                <th class="text-white border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-white">1</td>
                                <td class="text-white">1</td>
                                <td class="text-white"><img src="<? _WEB_ROOT . '/' ?>" alt=""
                                                            style="width: 50px !important; height: 50px !important;">
                                </td>
                                <td class="text-white">2</td>
                                <td class="text-white">10</td>
                                <td class="d-flex align-items-center pt-4">
                                    <a class="badge badge-primary mr-2"
                                       href="<?php echo _MANAGE_DEFAULT ?>/product/product_edit">See Details</a>
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