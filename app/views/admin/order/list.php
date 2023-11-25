<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Orders</h4>
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
                            <td class="text-white"
                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 150px;"><?= $item['user_address']; ?></td>
                            <td class="text-white"><?= '$' . $item['order_total']; ?></td>
                            <?php if ($item['order_payment_name'] == 'Payment on delivery') : ?>
                                <td>
                                    <div class="badge badge-outline-primary">Payment on delivery</div>
                                </td>
                            <?php else : ?>
                                <td>
                                    <div class="badge badge-outline-success">Transfer</div>
                                </td>
                            <?php endif ?>
                            <?php if ($item['order_name'] == 'Wait for confirmation') : ?>
                                <td>
                                    <div class="badge badge-outline-danger">Wait for confirmation</div>
                                </td>
                            <?php elseif ($item['order_name'] == 'Confirmed') : ?>
                                <td>
                                    <div class="badge badge-outline-info">Confirmed</div>
                                </td>
                            <?php elseif ($item['order_name'] == 'Are preparing') : ?>
                                <td>
                                    <div class="badge badge-outline-primary">Are preparing</div>
                                </td>
                            <?php elseif ($item['order_name'] == 'Delivering') : ?>
                                <td>
                                    <div class="badge badge-outline-warning">Delivering</div>
                                </td>
                            <?php elseif ($item['order_name'] == 'Has received the goods') : ?>
                                <td>
                                    <div class="badge badge-outline-success">Has received the goods</div>
                                </td>
                            <?php endif ?>
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