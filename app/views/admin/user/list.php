<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">List User</h4>
      <?php echo isset($checkForeignkey) ? '<p class="text-danger">' . $checkForeignkey . '</p>' : false; ?>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th class="text-white">Role</th>
              <th class="text-white">Image</th>
              <th class="text-white">Name</th>
              <th class="text-white">Email</th>
              <th class="text-white">Phone</th>
              <th class="text-white">Address</th>
              <th class="text-white">Create Date</th>
              <th class="text-white">Update Date</th>
              <th class="text-white">Status</th>
              <th class="text-white">User Create</th>
              <th class="text-white">User Update</th>
              <th class="text-white">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($listUser as $key => $item) : ?>
              <tr class="border-bottom">
                <td class="text-white"><?= $item['user_role'] == 1 ? 'Admin' : 'Client'; ?></td>
                <td class="text-white"><img src="<?= ($item['user_image_path'] ?  _WEB_ROOT . '/' . $item['user_image_path'] . $item['user_image'] : $item['user_image']) ?>" alt="" style="width: 50px !important; height: 50px !important;"></td>
                <td class="text-white"><?= $item['user_name']; ?></td>
                <td class="text-white"><?= $item['user_email']; ?></td>
                <td class="text-white"><?= $item['user_phone']; ?></td>
                <td class="text-white"><?= $item['user_address']; ?></td>
                <td class="text-white"><?= formatTimeAgo(strtotime($item['create_at'])); ?></td>
                <td class="text-white"><?= formatTimeAgo(strtotime($item['update_at'])); ?></td>
                <td class="text-white"><?= $item['user_locked'] == 0 ? 'Action' : 'Locked' ?></td>

                <?php $getUserCreate = $this->model('UserModel')->getUserCreate($item['user_create']);
                  $data = $getUserCreate;
                  if (isset($data)) {
                ?>
                <td class="text-white"><?= !empty($data['user_name']) == null ? $data['user_email'] : $data['user_name'] ?></td>
                <?php } ?>
                <?php $getUserUpdate = $this->model('UserModel')->getUserUpdate($item['user_update']);
                  $data2 = $getUserUpdate;
                  if (isset($data2)) {
                ?>
                <td class="text-white"><?= !empty($data2['user_name']) == null ? $data2['user_email'] : $data2['user_name'] ?></td>
                <?php } ?>

                <td class="d-flex align-items-center pt-4">
                  <?php $checkGoogle = $this->model('UserModel')->getUserGoogle($item['user_id']); ?>
                  <?php $data = $checkGoogle;
                  if (isset($data)) { ?>
                    <a class="badge badge-primary mr-2 <?= ($data['google_account'] == 1 || $data['user_role'] == 1) ? 'disabled' : false ?>" href="<? echo _MANAGE_DEFAULT ?>/user/user_edit/<?= $item['user_id'] ?>">Edit</a>
                    <form method="post" class="m-0">
                      <input type="hidden" name="user_id" value="<?= $item['user_id'] ?>">
                      <input type="hidden" name="create_at" value="<?= $item['create_at'] ?>">
                      <button type="submit" class="badge badge-danger border-0" onclick="return confirm('Delete user <?= $item['user_email'] ?>');">Delete
                      </button>
                    </form>
                  <?php }; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="float-left m-3 mt-4">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end pagination-sm">
              <li class="page-item <?= $pages < 3 ? 'd-none' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/user/list/<?= $per_pages; ?>/<?= 1; ?>" tabindex="-1">Previous</a></li>
              <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                <li class="page-item <?= $num == $pages ? 'disabled' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/user/list/<?= $per_pages; ?>/<?= $num; ?>"><?= $num; ?></a>
                </li>
              <?php } ?>
              <li class="page-item <?= $pages > ($totalPages - 1) ? 'd-none' : false; ?>"><a class="page-link" href="<?php echo _MANAGE_DEFAULT ?>/user/list/<?= $per_pages; ?>/<?= $pages + 1; ?>">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>