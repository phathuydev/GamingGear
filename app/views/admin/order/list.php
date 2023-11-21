<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Product</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">User name</th>
                        <th class="text-white">Note</th>
                        <th class="text-white">Total</th>
                        <th class="text-white">Payment</th>
                        <th class="text-white">Status</th>
                        <th class="text-white border-bottom-0">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listOrder as $key => $item): ?>
                        <tr>
                            <td class="text-white"><?= $key + 1; ?></td>
                            <td class="text-white"><?= $item['username']; ?></td>
                            <td class="text-white"><?= $item['ordernote']; ?></td>
                            <td class="text-white"><?= $item['ordertotal']; ?></td>
                            <td class="text-white"><?= $item['orderpaymentname']; ?></td>
                            <td class="text-white"><?= $item['orderstatusname']; ?></td>
                            <td class="d-flex align-items-center pt-4">
                                <a class="badge badge-primary mr-2"
                                   href="<?php echo _MANAGE_DEFAULT ?>/order/order_detail/<?= $item['orderid']; ?>">See
                                    detail</a>
                                <a class="badge badge-success mr-2"
                                   href="<?php echo _MANAGE_DEFAULT ?>/order/order_edit/<?= $item['orderid']; ?>/<?= $item['orderstatus']; ?>">Update
                                    status</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>