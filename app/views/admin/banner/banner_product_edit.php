<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Banner product <?= '#' . $banner_product_id ?></h4>
            <?php foreach ($getBannerProductEdit as $item) : ?>
                <form class="forms-sample" method="post" enctype='multipart/form-data'
                      onsubmit="return validateAddBannerProduct()">
                    <img class="mb-3"
                         src="<?= _WEB_ROOT . '/' . $item['banner_product_path'] . $item['banner_product_image'] ?>"
                         alt="" style="width: 100px !important; height: 100px !important;border-radius: 0;">
                    <div class="form-group border-0">
                        <label>Banners product<em class="text-danger"> * </em></label>
                        <div class="custom-file form-control">
                            <input type="file" class="form-control custom-file-input text-white"
                                   name="banner_product_image" id="banner_product_image"
                                   accept='image/png, image/jpeg, image/jpg'>
                            <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                                file</label>
                        </div>
                        <p class="text-danger m-2" id="error_banner_product_image"></p>
                    </div>
                    <input type="hidden" name="banner_product_id" value="<?= $item['banner_product_id'] ?>">
                    <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                    <input type="hidden" name="banner_product_image" value="<?= $item['banner_product_image'] ?>">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/banner">Cancel</a>
                </form>
            <?php endforeach ?>
        </div>
    </div>
</div>