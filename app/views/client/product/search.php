<div class="container w-auto">
    <div class="most-popular">
        <div class="heading-section text-center">
            <h4 class="mb-0 mt-5"><em>All</em> Products</h4>
            <p class="text-white">Keyword: <?php echo $keyWord; ?></p>
        </div>
        <div class="row pr-5 pl-5">
            <?php foreach ($getProductSearch as $item) : ?>
                <div class="bg-transparent featured-games header-text col-md-3 col-sm-12">
                    <div class="card-pd" style="height: 100%;">
                        <form method="POST">
                            <div class="imgBox">
                                <a href="<?php echo _PRODUCT_DEFAULT; ?>/product_detail/<?= $item['product_id'] . '/' . $item['category_id'] ?>/8/1"><img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" alt="mouse corsair" style="width: 200px !important; height: 200px !important;" class="mouse"></a>
                            </div>
                            <?php if ($item['product_price_reduce'] > 0) : ?>
                                <label class="top-0 mt-4 position-absolute start-0 rounded-circle bg-danger text-white ps-1 pt-2 pe-1 pb-2"><?= $item['product_price_reduce'] > 0 ? '-' . number_format((($item['product_price'] - $item['product_price_reduce']) / $item['product_price'] * 100), 0) . '%' : false; ?></label>
                            <?php endif ?>
                            <div class="contentBox">
                                <p class="h4 text-white text-uppercase font-weight-bold m-0" style="font-size: 15px;"><?= $item['product_name'] ?> </p>
                                <div class="d-flex align-items-center mt-1">
                                    <h3 class="mr-2 text-danger" style="font-size: 15px;"><?= $item['product_price_reduce'] == null ? $item['product_price'] . '$' : $item['product_price_reduce'] . '$' ?></h3>
                                    <s class="text-white" style="font-size: 15px;"><?= $item['product_price_reduce'] == null ? '' : $item['product_price'] . '$' ?></s>
                                </div>
                                <button type="submit" class="buy" style="font-size: 10px; padding: 5px 15px 5px 15px;" name="add_to_cart" <?= !empty($item['product_quantity']) <= 0 ? 'disabled' : '' ?>>Add To Cart
                                </button>
                            </div>
                            <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                            <input type="hidden" name="product_name" value="<?= $item['product_name'] ?>">
                            <input type="hidden" name="product_price" value="<?= $item['product_price'] ?>">
                            <input type="hidden" name="product_price_reduce" value="<?= $item['product_price_reduce'] ?>">
                            <input type="hidden" name="product_image_path" value="<?= $item['product_image_path'] ?>">
                            <input type="hidden" name="product_image" value="<?= $item['product_image'] ?>">
                            <input type="hidden" name="product_quantity" value="1">
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="d-flex justify-content-center mt-3 pe-4 pb-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end pagination-sm">
                    <li class="page-item <?= $pages < 3 ? 'd-none' : false; ?>"><a class="page-link text-black" href="<?php echo _WEB_ROOT ?>/search/<?= $per_pages; ?>/<?= 1; ?>" tabindex="-1">Previous</a></li>
                    <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                        <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a class="page-link text-black <?= $num == $pages ? 'bg-black text-white' : false; ?>" href="<?php echo _WEB_ROOT ?>/search/<?= $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a>
                        </li>
                    <?php } ?>
                    <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a class="page-link text-black" href="<?php echo _WEB_ROOT ?>/search/<?= $per_pages; ?>/<?= $pages + 1; ?>">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="most-popular pl-5 pr-5 mt-5">
            <div class="heading-section text-center">
                <h4 class="mb-3"><em>All</em> Category</h4>
            </div>
            <!-- ***** Featured Games Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured-games header-text">
                        <div class="owl-features owl-carousel">
                            <?php foreach ($getAllCategory as $item) : ?>
                                <div class="item p-5">
                                    <div class="thumb p-4">
                                        <a href="<?php echo _PRODUCT_DEFAULT ?>/product_category/<?= $item['category_id'] ?>/8/1"><img src="<?php echo _WEB_ROOT . '/' . $item['category_image_path'] . $item['category_image'] ?>" alt=""></a>
                                    </div>
                                    <h4 class="d-flex justify-content-center align-items-center mt-2 mb-0 m-0" style="font-size: 20px; line-height: 25px !important;"><?= $item['category_name'] ?></h4>
                                    <div class="d-flex justify-content-center align-items-center mt-2">
                                        <a class="buy" href="<?php echo _PRODUCT_DEFAULT ?>/product_category/<?= $item['category_id'] ?>" class="mt-5" style="font-size: 10px;">View Details</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>