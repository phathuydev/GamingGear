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
                                        src="<?= _WEB_ROOT . '/' . $item['productimagepath'] . $item['productimage'] ?>"
                                        alt="" style="width: 50px !important; height: 50px !important;"></td>
                            <td class="text-white"><?= $item['productname'] ?></td>
                            <td class="text-white"><?= $item['orderquantity'] ?></td>
                            <td class="text-white"><?= $item['producttotal'] ?></td>
                            <td class="d-flex align-items-center pt-4">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>