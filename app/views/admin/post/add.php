<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Post</h4>
            <h4 class="text-primary font-weight-bold">List Section</h4>
            <hr class="border-top border-white">
            <form class="forms-sample" method="post" enctype='multipart/form-data' onsubmit="return validateAddPost()">
                <div class="form-group">
                    <label for="">List Section Image Representing<em class="text-danger"> * </em></label>
                    <div class="custom-file form-control text-white">
                        <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                            file</label>
                        <input type="file" class="form-control custom-file-input text-white" name="post_image_section"
                               id="post_image_section" placeholder="Image" accept='image/png, image/jpeg, image/jpg'>
                    </div>
                    <p class="text-danger m-2" id="error_post_image_section"></p>
                </div>
                <div class="form-group mb-4">
                    <label for="">List Section Category<em class="text-danger"> * </em></label>
                    <select class="form-control text-white" name="category_id_section">
                        <?php foreach ($getAllCategory as $data) : ?>
                            <option value="<?= $data['category_id'] ?>" ?>
                                <?= $data['category_name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <h4 class="text-primary font-weight-bold">Content</h4>
                <hr class="border-top border-white">
                <div class="form-group">
                    <label for="">Content Title<em class="text-danger"> * </em></label>
                    <input type="text" class="form-control text-white" name="post_title_content" id="post_title_content"
                           placeholder="Content Title">
                    <p class="text-danger m-2" id="error_post_title_content"></p>
                </div>
                <div class=" form-group">
                    <label for="">Content Image<em class="text-danger"> * </em></label>
                    <div class="custom-file form-control text-white">
                        <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                            file</label>
                        <input type="file" class="form-control custom-file-input text-white" name="post_image_content"
                               id="post_image_content" placeholder="Image" accept='image/png, image/jpeg, image/jpg'>
                    </div>
                    <p class="text-danger m-2" id="error_post_image_content"></p>
                </div>
                <div class="form-group">
                    <label for="">Post Content<em class="text-danger"> * </em></label>
                    <textarea name="post_content_content" id="post_content_content" class="form-control text-white"
                              cols="30" rows="10" placeholder="Post Content"></textarea>
                    <p class="text-danger m-2" id="error_post_content_content"></p>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/post/list/8/1">Cancel</a>
            </form>
        </div>
    </div>
</div>