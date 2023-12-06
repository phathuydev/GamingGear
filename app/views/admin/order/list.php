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
              <th class="text-white">Order Payment</th>
              <th class="text-white">Order Journey</th>
              <th class="text-white">Order Status</th>
              <th class="text-white">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($listOrder as $key => $item) : ?>
              <tr class="border-bottom">
                <td class="text-white">#<?= $item['code_orders']; ?></td>
                <td class="text-white"><?= $item['user_name']; ?></td>
                <td class="text-white"><?= $item['user_email']; ?></td>
                <td class="text-white"><?= $item['user_phone']; ?></td>
                <td class="text-white"><?= $item['user_address']; ?></td>
                <td class="text-white"><?= '$' . $item['order_total']; ?></td>
                <td class="text-white"><?= $item['order_payment_name']; ?></td>
                <td class="text-white"><?= $item['order_name']; ?></td>
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
        <div class="float-left m-3 mt-4">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end pagination-sm">
              <li class="page-item <?= $pages < 3 ? 'd-none' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/order/list/<?= $per_pages; ?>/<?= 1; ?>" tabindex="-1">Previous</a></li>
              <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/order/list/<?= $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a></li>
              <?php } ?>
              <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/order/list/<?= $per_pages; ?>/<?= $pages + 1; ?>">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>