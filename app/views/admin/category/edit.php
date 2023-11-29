<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Category</h4>
            <p class="text-danger"><?= isset($nameExist) ? $nameExist : ''; ?></p>
            <?php $item = $firstCategory;
            if (isset($item)) {
                ?>
                <form class="forms-sample" method="post" enctype='multipart/form-data'
                      onsubmit="return validateEditCategory()"">
                <img class=" mb-3" src="<?= _WEB_ROOT . '/' . $item['category_image_path'] . $item['category_image'] ?>"
                     alt="" style="width: 75px !important; height: 75px !important; border-radius: 35px;">
                <div class="form-group border-0">
                    <label>Image<em class="text-danger"> * </em></label>
                    <div class="custom-file form-control">
                        <input type="file" class="form-control custom-file-input text-white" name="image"
                               placeholder="Image" accept='image/png, image/jpeg, image/jpg'>
                        <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                            file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Name<em class="text-danger"> * </em></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                           value="<?= $item['category_name'] ?>">
                    <p class="text-danger m-2" id="error_name"></p>
                </div>
                <input type="hidden" name="nameDefault" value="<?= $item['category_name'] ?>">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/category/list/8/1">Cancel</a>
                </form>
            <?php } ?>
        </div>
    </div>
</div>