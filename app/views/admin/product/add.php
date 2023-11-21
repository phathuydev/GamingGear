<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Add Product</h4>
        <?php
        HtmlHelper::formOpen('post', '', 'multipart/form-data', 'return validateUsers()');
        HtmlHelper::input('<div class="form-group">' . '<label>Product name</label>', '</div>', 'text', 'product_name', '', 'form-control', '', 'Productname', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Image</label>' . '<div class="custom-file form-control">', '<label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose file</label>' . '</div>' . '</div>', 'file', 'product_image', 'image/png, image/jpeg, image/jpg', 'custom-file-input text-white', '', '', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Price</label>', '</div>', 'num', 'product_price', '', 'form-control text-white', '', 'Productprice', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Price Reduce</label>', '</div>', 'num', 'product_price_reduce', '', 'form-control text-white', '', 'Pricereduce', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Quantity</label>', '</div>', 'num', 'product_quantity', '', 'form-control text-white', '', 'Quantity', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Special</label>', '</div>', 'num', 'product_special', '', 'form-control text-white', '', 'Special', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Describe</label>', '</div>', 'text', 'product_describe', '', 'form-control text-white', '', 'Describe', '');
        HtmlHelper::selectOption('<div class="form-group">' . '<label>Category</label>', '</div>', 'product_category', 'form-control text-white', '', '0', 'Category 1', '', '1', 'Category 2', '', '2', 'Category 3', '', '3', 'Category 4', 'd-none', '', '', );
        HtmlHelper::input('<div>', '</div>', 'hidden', 'user_create', '', '', '', '', '1');
        HtmlHelper::input('<div>', '</div>', 'hidden', 'user_update', '', '', '', '', '1');
        HtmlHelper::submit('<div class="mt-4">', '<a class="btn btn-dark" href="' . _MANAGE_DEFAULT . '/product">Cancel</a>' . '</div>', 'insertProduct', 'Submit', 'btn btn-primary mr-2');
        HtmlHelper::formClose();
        ?>
    </div>
  </div>
</div>
