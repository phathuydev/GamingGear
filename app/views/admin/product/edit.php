<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Update product</h4>
        <?php $item = $getFirstProduct;
        if (isset($item)) {
            ?>
            <form class="forms-sample" method="post" enctype='multipart/form-data'
                  onsubmit="return validateEditProducts()">
                <div class="form-group">
                    <label>Name Product<em class="text-danger"> * </em></label>
                    <input type="text" class="form-control text-white" name="product_name" id="product_name"
                           placeholder="Name product" value="<?= $item['product_name'] ?>">
                    <p class="text-danger m-2" id="error_product_name"></p>
                </div>
                <img class="mb-3" src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                     alt="" style="width: 50px !important; height: 50px !important;">
                <div class="form-group">
                    <label>Image<em class="text-danger"> * </em></label>
                    <div class="custom-file form-control">
                        <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                            file</label>
                        <input type="file" class="form-control custom-file-input text-white" name="product_image"
                               placeholder="Image" accept='image/png, image/jpeg, image/jpg'>
                    </div>
                </div>
          <div class="form-group">
              <label>Price ($)<em class="text-danger"> * </em></label>
              <input type="num" class="form-control text-white" name="product_price" id="product_price"
                     placeholder="Price" value="<?= $item['product_price'] ?>">
              <p class="text-danger m-2" id="error_product_price"></p>
          </div>
          <div class="form-group">
              <label for="">Price reduce ($)</label>
              <input type="num" class="form-control text-white" name="product_price_reduce" id="product_price_reduce"
                     placeholder="price reduce" value="<?= $item['product_price_reduce'] ?>">
          </div>
                <p class="text-danger m-2" id="error_product_price_reduce"></p>
          <div class="form-group">
              <label for="">Quantity<em class="text-danger"> * </em></label>
              <input type="text" class="form-control text-white" name="product_quantity" id="product_quantity"
                     placeholder="quantity" value="<?= $item['product_quantity'] ?>">
              <p class="text-danger m-2" id="error_product_quantity"></p>
          </div>
          <div class="form-group">
              <label for="">Category</label>
              <select class="form-control text-white" name="category_id" id="">
                  <?php foreach ($getAllCategory as $data) : ?>
                      <option value="<?= $data['category_id'] ?>" <?= $item['category_id'] == $data['category_id'] ? 'selected' : '' ?>>
                          <?= $data['category_name'] ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="">Special</label>
              <select class="form-control text-white" name="product_special" id="">
                  <option class="d-none"
                          value="<?= $item['product_special'] ?>"><?= $item['product_special'] == 0 ? 'Normal' : 'Special' ?></option>
                  <option value="0">Normal</option>
                  <option value="1">Special</option>
              </select>
          </div>
          <div class="form-group">
              <label for="">Describe<em class="text-danger"> * </em></label>
              <input type="text" class="form-control text-white" name="product_describe" id="product_describe"
                     placeholder="desctibe" value="<?= $item['product_describe'] ?>">
              <p class="text-danger m-2" id="error_product_describe"></p>
          </div>
                <input type="hidden" class="form-control" name="imageDefault" value="<?= $item['product_image'] ?>">
                <input type="hidden" class="form-control" name="create_at" value="<?= $item['create_at'] ?>">
                <input type="hidden" class="form-control" name="update_at" value="<?= date("Y-m-d H:i:s"); ?>">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/product">Cancel</a>
            </form>
        <?php } ?>
    </div>
  </div>
</div>