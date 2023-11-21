<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Add Add</h4>
      <form class="forms-sample">
        <div class="form-group">
            <label for="exampleInputUsername1">Name Product</label>
            <input type="text" class="form-control" id="" placeholder="name product" value="">
        </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Image</label>
              <input type="file" class="form-control" id="" placeholder="image" value="">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">price</label>
              <input type="num" class="form-control" id="" placeholder="price">
          </div>
          <div class="form-group">
              <label for="exampleInputConfirmPassword1">Sale</label>
              <input type="num" class="form-control" id="" placeholder="sale">
          </div>
          <div class="form-group">
              <label for="exampleInputConfirmPassword1">category</label>
              <input type="text" class="form-control" id="" placeholder="category">
          </div>
          <div class="form-group">
              <label for="exampleInputConfirmPassword1">Speciel</label>
              <input type="text" class="form-control" id="" placeholder="speciel">
          </div>
          <div class="form-group">
              <label for="exampleInputConfirmPassword1">Describe</label>
              <input type="text" class="form-control" id="" placeholder="desctibe">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/product">Cancel</a>
          <?php
          $item = $firtsProduct;
          HtmlHelper::formOpen('post', '', '', 'return validateUsers()');
          HtmlHelper::input('<div class="form-group">' . '<label>Product name</label>', '</div>', 'text', 'product_name', '', 'form-control', '', $item['product_name'], '');
          HtmlHelper::selectOption('<div class="form-group">' . '<label>Status</label>', '</div>', 'product_category', 'form-control text-white', 'd-none', $item['product_category'], $item['product_category'] == 0 ? 'Category 1' : 'Category 2', '', '0', 'Action', '', '1', 'Locked', 'd-none', '', '', 'd-none', '', '');
          HtmlHelper::input('<div>', '</div>', 'hidden', 'create_at', '', '', '', '', $item['create_at']);
          HtmlHelper::input('<div>', '</div>', 'hidden', 'update_at', '', '', '', '', date("Y-m-d H:i:s"));
          HtmlHelper::input('<div>', '</div>', 'hidden', 'user_create', '', '', '', '', $item['user_create']);
          HtmlHelper::input('<div>', '</div>', 'hidden', 'user_update', '', '', '', '', '1');
          HtmlHelper::submit('<div class="mt-4">', '<a class="btn btn-dark" href="' . _MANAGE_DEFAULT . '/user">Cancel</a>' . '</div>', 'updateUser', 'Submit', 'btn btn-primary mr-2');
          HtmlHelper::formClose();
          ?>
      </form>
    </div>
  </div>
</div>