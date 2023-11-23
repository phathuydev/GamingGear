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
                        <th class="text-white">Email</th>
                        <th class="text-white">Phone</th>
                        <th class="text-white">Address</th>
                        <th class="text-white">Total</th>
                        <th class="text-white">Payment</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($listOrder as $key => $item) : ?>
                        <tr>
                            <td class="text-white"><?= $key + 1; ?></td>
                            <td class="text-white"><?= $item['user_name']; ?></td>
                            <td class="text-white"><?= $item['user_email']; ?></td>
                            <td class="text-white"><?= $item['user_phone']; ?></td>
                            <td class="text-white"><?= $item['user_address']; ?></td>
                            <td class="text-white"><?= '$' . $item['order_total']; ?></td>
                            <td class="text-white"><?= $item['order_payment_name']; ?></td>
                            <td class="text-white"><?= $item['order_name']; ?></td>
                            <td class="d-flex align-items-center">
                                <a class="badge badge-primary mr-2"
                                   href="<?php echo _MANAGE_DEFAULT ?>/order/order_detail/<?= $item['order_id']; ?>">See
                                    detail</a>
                                <a class="badge badge-success mr-2"
                                   href="<?php echo _MANAGE_DEFAULT ?>/order/order_edit/<?= $item['order_id']; ?>/<?= $item['order_status']; ?>">Update
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