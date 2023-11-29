<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">Update Status User <?= '#' . $user_id; ?></h4>
        <?php
        $item = $firstUser;
        HtmlHelper::formOpen('post', '', '', 'return validateUsers()');
        HtmlHelper::selectOption('<div class="form-group">' . '<label>Status</label>', '</div>', 'user_locked', 'form-control text-white', 'd-none', $item['user_locked'], $item['user_locked'] == 0 ? 'Action' : 'Locked', '', '0', 'Action', '', '1', 'Locked', 'd-none', '', '', 'd-none', '', '');
        HtmlHelper::submit('<div class="mt-4">', '<a class="btn btn-dark" href="' . _MANAGE_DEFAULT . '/user/list/8/1">Cancel</a>' . '</div>', 'Submit', 'btn btn-primary mr-2');
        HtmlHelper::formClose();
        ?>
    </div>
  </div>
</div>