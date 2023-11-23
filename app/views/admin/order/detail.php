<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Detail Product</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Image</th>
                        <th class="text-white">Product name</th>
                        <th class="text-white">Quantity</th>
                        <th class="text-white">Product total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($getOrderDetail as $key => $item) : ?>
                        <tr>
                            <td class="text-white"><?= $key + 1 ?></td>
                            <td class="text-white"><img
                                        src="<?= _WEB_ROOT . '/' . $item['product_image_path'] . $item['product_image'] ?>"
                                        alt="" style="width: 50px !important; height: 50px !important;"></td>
                            <td class="text-white"><?= $item['product_name'] ?></td>
                            <td class="text-white"><?= $item['order_quantity'] ?></td>
                            <td class="text-white"><?= '$' . $item['product_total'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>