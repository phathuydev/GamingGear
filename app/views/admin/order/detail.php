<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail Orders</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">Image</th>
                        <th class="text-white">Product Name</th>
                        <th class="text-white">Quantity</th>
                        <th class="text-white">Total Product</th>
                        <th class="text-white">Order Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($getOrderDetail as $key => $item) : ?>
                        <tr class="border-bottom">
                            <td class="text-white"><img
                                        src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                                        alt="" style="width: 50px !important; height: 50px !important;"></td>
                            <td class="text-white"><?= $item['product_name'] ?></td>
                            <td class="text-white"><?= $item['order_quantity'] ?></td>
                            <td class="text-white"><?= '$' . $item['product_total'] ?></td>
                            <?php if ($item['order_payment_name'] == '1') : ?>
                                <td>
                                    <div class="badge badge-outline-primary">Payment on delivery</div>
                                </td>
                            <?php else : ?>
                                <td>
                                    <div class="badge badge-outline-success">Transfer</div>
                                </td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>