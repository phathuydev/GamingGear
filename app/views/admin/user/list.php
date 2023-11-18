<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">List User</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
                <th class="text-white">#</th>
                <th class="text-white">Role</th>
                <th class="text-white">Image</th>
                <th class="text-white">Name</th>
                <th class="text-white">Email</th>
                <th class="text-white">Phone</th>
                <th class="text-white">Address</th>
              <th class="text-white">Status</th>
                <th class="text-white border-bottom-0">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($listUser as $key => $item) : ?>
              <tr>
                  <td class="text-white"><?= $key + 1; ?></td>
                  <td class="text-white"><?= $item['user_role'] == 1 ? 'Admin' : 'Client'; ?></td>
                  <td class="text-white"><img
                              src="<?= $item['user_image'] == true ? _WEB_ROOT . '/' . $item['user_image_path'] . $item['user_image'] : _WEB_ROOT . '/' . $item['user_image_path'] . 'default_img.jpg'; ?>"
                              alt="" style="width: 50px !important; height: 50px !important;"></td>
                  <td class="text-white"><?= $item['user_name']; ?></td>
                  <td class="text-white"><?= $item['user_email']; ?></td>
                  <td class="text-white"><?= $item['user_phone']; ?></td>
                  <td class="text-white"><?= $item['user_address']; ?></td>
                  <td class="text-white"><?= $item['user_locked'] == 0 ? 'Action' : 'Locked' ?></td>
                  <td class="d-flex align-items-center pt-4">
                      <a class="badge badge-primary mr-2"
                         href="<? echo _MANAGE_DEFAULT ?>/user/user_edit/<?= $item['user_id'] ?>">Edit</a>
                      <form method="post" class="m-0">
                          <input type="hidden" name="user_id" value="<?= $item['user_id'] ?>">
                          <input type="hidden" name="is_delete" value="1">
                          <input type="hidden" name="user_delete" value="1">
                          <input type="hidden" name="create_at" value="<?= $item['create_at'] ?>">
                          <input type="hidden" name="update_at" value="<?= date("Y-m-d H:i:s") ?>">
                          <input type="hidden" name="user_create" value="<?= $item['user_create'] ?>">
                          <input type="hidden" name="user_update" value="<?= '1' ?>">
                          <button type="submit" name="updateIsdelete" class="badge badge-danger border-0"
                                  onclick="return confirm('Delete user <?= $item['user_email'] ?>');">Delete
                          </button>
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