<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Add product</h4>
        <form class="forms-sample" method="post" enctype='multipart/form-data' onsubmit="return validateProducts()">
            <div class="form-group">
                <label>Name Product<em class="text-danger"> * </em></label>
                <input type="text" class="form-control text-white" name="product_name" placeholder="Name product"
                       id="product_name">
                <p class="text-danger m-2" id="error_product_name"></p>
            </div>
            <div class="form-group">
                <label>Image<em class="text-danger"> * </em></label>
                <div class="custom-file form-control">
                    <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                        file</label>
                    <input type="file" class="form-control custom-file-input text-white" name="product_image"
                           id="product_image" placeholder="Image" accept='image/png, image/jpeg, image/jpg'>
                </div>
                <p class="text-danger m-2" id="error_product_image"></p>
            </div>
            <div class="form-group">
                <label>Price ($)<em class="text-danger"> * </em></label>
                <input type="num" class="form-control text-white" name="product_price" placeholder="Price"
                       id="product_price">
                <p class="text-danger m-2" id="error_product_price"></p>
            </div>
            <div class="form-group">
                <label for="">Price reduce ($)</label>
                <input type="num" class="form-control text-white" name="product_price_reduce" id="product_price_reduce"
                       placeholder="Price reduce">
            </div>
            <p class="text-danger m-2" id="error_product_price_reduce"></p>
            <div class="form-group">
                <label for="">Quantity<em class="text-danger"> * </em></label>
                <input type="text" class="form-control text-white" name="product_quantity" placeholder="Quantity"
                       id="product_quantity">
                <p class="text-danger m-2" id="error_product_quantity"></p>
            </div>
            <div class="form-group">
                <label for="">Category<em class="text-danger"> * </em></label>
                <select class="form-control text-white" name="category_id">
                    <?php foreach ($getAllCategory as $data) : ?>
                        <option value="<?= $data['category_id'] ?>" ?>
                            <?= $data['category_name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Special<em class="text-danger"> * </em></label>
                <select class="form-control text-white" name="product_special">
                    <option value="0">Normal</option>
                    <option value="1">Special</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Describe<em class="text-danger"> * </em></label>
                <input type="text" class="form-control text-white" name="product_describe" placeholder="Desctibe"
                       id="product_describe">
                <p class="text-danger m-2" id="error_product_describe"></p>
            </div>
            <button type=" submit" class="btn btn-primary mr-2">Submit</button>
            <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/product/list/8/1">Cancel</a>
        </form>
    </div>
  </div>
</div>