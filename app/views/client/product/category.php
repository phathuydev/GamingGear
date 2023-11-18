<div class="heading-section text-center">
    <h4><em>Product</em> Category</h4>
</div>
<!-- ***** Featured Games Start ***** -->
<div class="row">
    <?php foreach ($getProductCategory as $item) : ?>
        <div class="bg-transparent featured-games header-text col-md-3 col-sm-12">
            <div class="card-pd" style="height: 100%;">
                <div class="imgBox">
                    <a href="<?= _PRODUCT_DEFAULT ?>/product_detail/<?= $item['product_id'] . '/' . $item['product_category'] ?>"><img
                                src="<?php echo _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>  "
                                alt="mouse corsair" style="width: 200px !important; height: 200px !important;"
                                class="mouse"></a>
                </div>
                <div class="contentBox">
                    <p class="h4 text-white text-uppercase font-weight-bold m-0"
                       style="font-size: 15px;"><?= $item['product_name'] ?></p>
                    <div class="d-flex align-items-center mt-1">
                        <h3 class="mr-2 text-danger"
                            style="font-size: 15px;"><?= $item['product_sale'] == null ? $item['product_price'] . '$' : $item['product_sale'] . '$' ?></h3>
                        <s class="text-white"
                           style="font-size: 15px;"><?= $item['product_sale'] == null ? '' : $item['product_price'] . '$' ?></s>
                    </div>
                    <a href="#" class="buy" style="font-size: 10px; padding: 5px 15px 5px 15px;">Add to cart</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Categories -->
<div class="most-popular">
    <div class="col-lg-12">
        <div class="heading-section text-center mt-5">
            <h4><em>All</em> Category</h4>
        </div>
        <div class="featured-games header-text">
            <div class="owl-features owl-carousel mb-5">
                <?php foreach ($getAllCategory as $item) : ?>
                    <div class="container">
                        <div class="card">
                            <div class="imgBx">
                                <a href="<?php echo _PRODUCT_DEFAULT ?>/product_category/<?= $item['category_id'] ?>"><img
                                            src="<?php echo _WEB_ROOT . '/' . $item['category_image_path'] . $item['category_image'] ?>"
                                            alt="headphone"></a>
                            </div>
                            <div class="contentBx">
                                <h2><?= $item['category_name'] ?></h2>
                                <a href="<?php echo _PRODUCT_DEFAULT ?>/product_category/<?= $item['category_id'] ?>"
                                   class="mt-5">View Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>