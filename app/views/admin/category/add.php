<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            <p class="text-danger"><?= isset($nameExist) ? $nameExist : ''; ?></p>
            <form class="forms-sample" method="post" enctype='multipart/form-data' onsubmit="return validateCategory()">
                <div class="form-group border-0">
                    <label>Image<em class="text-danger"> * </em></label>
                    <div class="custom-file form-control">
                        <input type="file" class="form-control custom-file-input text-white" name="image" id="image"
                               placeholder="Image" accept='image/png, image/jpeg, image/jpg'>
                        <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                            file</label>
                    </div>
                    <p class="text-danger m-2" id="error_image"></p>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    <p class="text-danger m-2" id="error_name"></p>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/category">Cancel</a>
            </form>
        </div>
    </div>
</div>