<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">List Products</h4>
            <div class="float-right">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end pagination-sm">
                        <li class="page-item <?= $pages < 3 ? 'd-none' : false; ?>"><a class="page-link"
                                                                                       href="<?php echo _MANAGE_DEFAULT ?>/product/list/<?= $per_pages; ?>/<?= 1; ?>"
                                                                                       tabindex="-1">Previous</a></li>
                        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                            <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a class="page-link"
                                                                                                 href="<?php echo _MANAGE_DEFAULT ?>/product/list/<?= $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a>
                            </li>
                        <?php } ?>
                        <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a class="page-link"
                                                                                                       href="<?php echo _MANAGE_DEFAULT ?>/product/list/<?= $per_pages; ?>/<?= $pages + 1; ?>">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">Name</th>
                        <th class="text-white">Image</th>
                        <th class="text-white">Price</th>
                        <th class="text-white">Sale</th>
                        <th class="text-white">Quantity</th>
                        <th class="text-white">Category</th>
                        <th class="text-white">Create Date</th>
                        <th class="text-white">Special</th>
                        <th class="text-white pl-4">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listProduct as $item) : ?>
                        <tr>
                            <td class="text-white">
                                <?= $item['product_name'] ?>
                            </td>
                            <td class="text-white"><img
                                        src="<?= $item['product_image'] == true ? _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] : _WEB_ROOT . '/' . $item['product_image_path'] . 'default_img.jpg'; ?>"
                                        alt="" style="width: 50px !important; height: 50px !important;"></td>
                            <td class="text-white">
                                <?= '$' . $item['product_price'] ?>
                            </td>
                            <td class="text-white">
                                <?= $item['product_price_reduce'] == null ? 'No Reduce' : '$' . $item['product_price_reduce'] ?>
                            </td>
                            <td class="text-white">
                                <?= $item['product_quantity'] ?>
                            </td>
                            <td class="text-white">
                                <?= $item['category_name'] ?>
                            </td>
                            <td class="text-white"><?= formatTimeAgo(strtotime($item['create_at'])); ?></td>
                            <td class="text-white">
                                <?= $item['product_special'] == 0 ? 'Nornal' : 'Special' ?>
                            </td>
                            <td class="d-flex align-items-center pt-4">
                                <a class="badge badge-primary mr-2"
                                   href="<? echo _MANAGE_DEFAULT ?>/product/product_edit/<?= $item['product_id'] ?>/<?= $per_pages ?>/<?= $pages ?>">Edit</a>
                                <form action="" method="post" class="m-0">
                                    <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                                    <input type="hidden" name="create_at" value="<?= $item['create_at'] ?>">
                                    <button type="submit" class="badge badge-danger border-0 "
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