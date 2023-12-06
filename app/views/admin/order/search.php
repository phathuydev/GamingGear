<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">List Orders</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th class="text-white">Code orders</th>
              <th class="text-white">User name</th>
              <th class="text-white">Email</th>
              <th class="text-white">Phone</th>
              <th class="text-white">Address</th>
              <th class="text-white">Total</th>
              <th class="text-white">Status</th>
              <th class="text-white">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($getOrderSearch as $key => $item) : ?>
              <tr class="border-bottom">
                <td class="text-white">#<?= $item['code_orders']; ?></td>
                <td class="text-white"><?= $item['user_name']; ?></td>
                <td class="text-white"><?= $item['user_email']; ?></td>
                <td class="text-white"><?= $item['user_phone']; ?></td>
                <td class="text-white"><?= $item['user_address']; ?></td>
                <td class="text-white"><?= '$' . $item['order_total']; ?></td>
                <?php $checkFailOrder = $this->model('OrderModel')->countOrderDetail($item['order_id']); ?>
                <?php foreach ($checkFailOrder as $data) : ?>
                  <td class="text-white"><?= $data == 0 ? '<div class="badge badge-outline-danger">Cancelled</div>' : '<div class="badge badge-outline-success">Not cancelled</div>' ?></td>
                  <td class="d-flex align-items-center">
                    <a class="badge badge-primary mr-2 <?= $data == 0 ? 'disabled' : false ?>" href="<?php echo _MANAGE_DEFAULT ?>/order/order_detail/<?= $item['order_id']; ?>">See detail</a>
                    <a class="badge badge-success mr-2 <?= $data == 0 ? 'disabled' : false ?>" href="<?php echo _MANAGE_DEFAULT ?>/order/order_edit/<?= $item['order_id']; ?>/<?= $item['order_status']; ?>">Update status</a>
                  </td>
                <?php endforeach ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>