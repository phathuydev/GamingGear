<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Update product</h4>
        <?php $item = $firstProduct;
        if (isset($item)) {
            ?>
            <form class="forms-sample" method="post" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Name Product</label>
                    <input type="text" class="form-control" id="" name="product_name" placeholder="name product"
                           value="<?= $item['product_name'] ?>">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" id="" name="product_image" placeholder="image"
                           accept='image/png, image/jpeg, image/jpg'>
                </div>
          <div class="form-group">
              <label>price</label>
              <input type="num" class="form-control" id="" name="product_price" placeholder="price"
                     value="<?= $item['product_price'] ?>">
          </div>
          <div class="form-group">
              <label for="">Price reduce</label>
              <input type="num" class="form-control" id="" name="product_price_reduce" placeholder="price reduce"
                     value="<?= $item['product_price_reduce'] ?>">
          </div>
          <div class="form-group">
              <label for="">Quantity</label>
              <input type="text" class="form-control" id="" name="product_quantity" placeholder="quantity"
                     value="<?= $item['product_quantity'] ?>">
          </div>
          <div class="form-group">
              <label for="">Category</label>
              <select class="form-control text-white" name="product_category" id="">
                  <?php foreach ($getAllCategory as $data): ?>
                      <option value="<?= $data['category_id'] ?>" <?= $item['product_category'] == $data['category_id'] ? 'selected' : '' ?>>
                          <?= $data['category_name'] ?>
                      </option>
                  <?php endforeach; ?>
              </select>
          </div>
          <div class="form-group">
              <label for="">Special</label>
              <select class="form-control text-white" name="product_special" id="">
                  <option class="d-none"
                          value="<?= $item['product_special'] ?>"><?= $item['product_special'] == 0 ? 'normal' : 'special' ?></option>
                  <option value="0">normal</option>
                  <option value="1">special</option>
              </select>
          </div>
          <div class="form-group">
              <label for="">Describe</label>
              <input type="text" class="form-control" id="" name="product_describe" placeholder="desctibe"
                     value="<?= $item['product_describe'] ?>">
          </div>
                <input type="hidden" class="form-control" id="" name="create_at" value="<?= $item['create_at'] ?>">
                <input type="hidden" class="form-control" id="" name="update_at" value="<?= date("Y-m-d H:i:s"); ?>">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/order">Cancel</a>
            </form>
        <?php } ?>
    </div>
  </div>
</div>