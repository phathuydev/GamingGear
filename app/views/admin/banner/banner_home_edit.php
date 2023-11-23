<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Banner Home <?= '#' . $banner_home_id ?></h4>
            <?php foreach ($getBannerEdit as $item) : ?>
                <form class="forms-sample" method="post" enctype='multipart/form-data'
                      onsubmit="return validateAddBannerHome()">
                    <img class="mb-3"
                         src="<?= _WEB_ROOT . '/' . $item['banner_home_path'] . $item['banner_home_image'] ?>" alt=""
                         style="width: 100px !important; height: 50px !important;border-radius: 0;">
                    <div class="form-group border-0">
                        <label>Banners Home<em class="text-danger"> * </em></label>
                        <div class="custom-file form-control">
                            <input type="file" class="form-control custom-file-input text-white"
                                   name="banner_home_image" id="banner_home_image"
                                   accept='image/png, image/jpeg, image/jpg'>
                            <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                                file</label>
                        </div>
                        <p class="text-danger m-2" id="error_banner_home_image"></p>
                    </div>
                    <input type="hidden" name="banner_home_id" value="<?= $item['banner_home_id'] ?>">
                    <input type="hidden" name="banner_home_image" value="<?= $item['banner_home_image'] ?>">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/banner">Cancel</a>
                </form>
            <?php endforeach ?>
        </div>
    </div>
</div>