<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add User</h4>
        <?php
        $item = $firstUser;
        HtmlHelper::formOpen('post', '', '', 'return validateUsers()');
        HtmlHelper::selectOption('<div class="form-group">' . '<label>Status</label>', '</div>', 'user_locked', 'form-control text-white', 'd-none', $item['user_locked'], $item['user_locked'] == 0 ? 'Action' : 'Locked', '', '0', 'Action', '', '1', 'Locked', 'd-none', '', '', 'd-none', '', '');
        HtmlHelper::input('<div>', '</div>', 'hidden', 'create_at', '', '', '', '', $item['create_at']);
        HtmlHelper::input('<div>', '</div>', 'hidden', 'update_at', '', '', '', '', date("Y-m-d H:i:s"));
        HtmlHelper::input('<div>', '</div>', 'hidden', 'user_create', '', '', '', '', $item['user_create']);
        HtmlHelper::submit('<div class="mt-4">', '<a class="btn btn-dark" href="' . _MANAGE_DEFAULT . '/user">Cancel</a>' . '</div>', 'Submit', 'btn btn-primary mr-2');
        HtmlHelper::formClose();
        ?>
    </div>
  </div>
</div>