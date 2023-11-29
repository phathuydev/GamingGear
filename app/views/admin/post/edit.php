<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Post <?= '#' . $post_id; ?></h4>
            <h4 class="text-primary font-weight-bold">List Section</h4>
            <hr class="border-top border-white">
            <?php foreach ($getPostEdit as $item) : ?>
                <form class="forms-sample" method="post" enctype='multipart/form-data'
                      onsubmit="return validateEditPost()">
                    <img class="mb-3" src="<?= _WEB_ROOT . '/' . $item['post_image_path'] . $item['post_image'] ?>"
                         alt="" style="width: 200px !important; height: 100px !important;">
                    <div class="form-group">
                        <label for="">List Section Image Representing</label>
                        <div class="custom-file form-control text-white">
                            <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                                file</label>
                            <input type="file" class="form-control custom-file-input text-white"
                                   name="post_image_section" placeholder="Image"
                                   accept='image/png, image/jpeg, image/jpg'>
                            <input type="hidden" name="post_image_default" value="<?= $item['post_image'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="">List Section Category</label>
                        <select class="form-control text-white" name="category_id_section">
                            <?php foreach ($getAllCategory as $data) : ?>
                                <option value="<?= $data['category_id'] ?>" <?= $item['category_id'] == $data['category_id'] ? 'selected' : '' ?>>
                                    <?= $data['category_name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h4 class="text-primary font-weight-bold">Content</h4>
                    <hr class="border-top border-white">
                    <div class="form-group">
                        <label for="">Content Title</label>
                        <input type="text" class="form-control text-white" name="post_title_content"
                               id="post_title_content" placeholder="Content Title"
                               value="<?= $item['post_detail_title'] ?>">
                    </div>
                    <p class="text-danger m-2" id="error_post_title_content"></p>
                    <img class="mb-3"
                         src="<?= _WEB_ROOT . '/' . $item['post_detail_image_path'] . $item['post_detail_image'] ?>"
                         alt="" style="width: 200px !important; height: 100px !important;">
                    <div class="form-group">
                        <label for="">Content Image</label>
                        <div class="custom-file form-control">
                            <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                                file</label>
                            <input type="file" class="form-control custom-file-input text-white"
                                   name="post_image_content" placeholder="Image"
                                   accept='image/png, image/jpeg, image/jpg'>
                            <input type="hidden" name="post_detail_image_default"
                                   value="<?= $item['post_detail_image'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Post Content</label>
                        <textarea name="post_content_content" id="post_content_content" class="form-control text-white"
                                  cols="30" rows=15" placeholder="Post Content"
                                  style="line-height: 20px;"><?= $item['post_detail_content'] ?></textarea>
                    </div>
                    <p class="text-danger m-2" id="error_post_content_content"></p>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/post/list/8/1">Cancel</a>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>