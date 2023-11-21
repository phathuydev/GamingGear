<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Category</h4>
            <?php $item = $firstCategory;
            if (isset($item)) {
                ?>
                <form class="forms-sample" method="post" enctype='multipart/form-data'>
                    <img class="mb-3"
                         src="<?= _WEB_ROOT . '/' . $item['category_image_path'] . $item['category_image'] ?>" alt=""
                         style="width: 75px !important; height: 75px !important; border-radius: 35px;">
                    <div class="form-group border-0">
                        <label>Image</label>
                        <div class="custom-file form-control">
                            <input type="file" class="form-control custom-file-input text-white" name="image"
                                   placeholder="Image" accept='image/png, image/jpeg, image/jpg'>
                            <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                                file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name"
                               value="<?= $item['category_name'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/category">Cancel</a>
                </form>
            <?php } ?>
        </div>
    </div>
</div>