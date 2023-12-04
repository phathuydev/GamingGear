<div class="container w-auto">
  <div class="most-popular">
    <?php if (isset($_SESSION['cart']) ? (count($_SESSION['cart']) > 0) : false) : ?>
      <div class="row d-flex justify-content-center heading-section p-4">
        <div class="col-md-8">
          <div class="most-popular mt-0">
            <div class="card-header py-3">
              <h4 class="mb-0 ms-0">Cart</h4>
            </div>
            <div class="card-body">
              <!-- Single item -->
              <div class="row d-flex align-items-center">
                <?php foreach ($_SESSION['cart'] as $item) : ?>
                  <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                      <img src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>" style="width: 75px !important;" alt="<?= $item['product_name'] ?>" />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                      </a>
                    </div>
                    <!-- Image -->
                  </div>

                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p class="text-white"><strong><?= $item['product_name'] ?></strong></p>
                    <p class="text-white">Price: $<?= $item['product_price_reduce'] == null ? $item['product_price'] : $item['product_price_reduce'] ?></p>
                    <!-- Data -->
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- Quantity -->
                    <div class="d-flex mb-3 justify-content-center" style="max-width: 300px">
                      <form action="" method="post">
                        <div class="d-flex align-items-center">
                          <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                          <input class="rounded-2 text-center border-0" id="inputQuantity" type="num" name="new_quantity" value="<?= $item['product_quantity'] ?>" style="max-width: 5rem" />
                          <button type="submit" name="update_quantity" class="btn ms-2 bg-success text-white p-0 border-0 pl-1 pr-1">Update</button>
                        </div>
                      </form>
                      <div class="d-flex align-items-center">
                        <form method="post">
                          <input type="hidden" name="product_id" value="<?= $item['product_id'] ?>">
                          <button type="submit" class="btn ms-2 bg-danger text-white p-0 border-0 pl-1 pr-1" name="delete_product" onclick="return confirm('Delete <?= $item['product_name'] ?>')">Delete</button>
                        </form>
                      </div>
                    </div>
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-center">
                      <strong class="text-white">Total: $<?= $item['product_price_reduce'] == null ? $item['product_price'] * $item['product_quantity'] : $item['product_price_reduce'] * $item['product_quantity'] ?></strong>
                    </p>
                    <!-- Price -->
                  </div>
                  <hr class="border-bottom text-white mt-3">
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-4 most-popular mt-0">
            <div class="card-header py-3">
              <h4 class="mb-0 ms-0">Summary</h4>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3 text-white">
                Total Products
                <span><?= $totalCart ?></span>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3 text-white">
                Total Price
                <span>$<?= $totalPrice ?></span>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3 text-white">
                Shipping
                <span>Gratis</span>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3 text-white">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>$<?= $totalPrice ?></strong></span>
              </div>
              <a href="<?php echo _WEB_ROOT; ?>/checkout" class="btn btn-lg btn-block" style="background-color: #ec6090; color: #fff;">
                Go to checkout
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="row d-flex justify-content-center heading-section p-4">
        <div class="col-md-12">
          <p class="text-danger text-center">There are no products in the cart yet</p>
        </div>
      </div>
    <?php endif ?>
  </div>
  