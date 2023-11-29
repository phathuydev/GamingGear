<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add User</h4>
        <?php echo isset($checkEmailExist) ? '<p class="text-danger">' . $checkEmailExist . '</p>' : false; ?>
        <?php
        HtmlHelper::formOpen('post', '', 'multipart/form-data', 'return validateUsers()');
        HtmlHelper::input('<div class="form-group">' . '<label>Username</label>', '</div>', 'text', 'user_name', '', 'form-control', '', 'Username', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Email</label>' . '<em class="text-danger"> * </em>', '<p class="text-danger m-2" id="error_user_email"></p>' . '</div>', 'email', 'user_email', '', 'form-control text-white', 'user_email', 'Email', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Password</label>' . '<em class="text-danger"> * </em>', '<p class="text-danger m-2" id="error_user_password"></p>' . '</div>', 'password', 'user_password', '', 'form-control text-white', 'user_password', 'Password', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Phone</label>', '</div>', 'num', 'user_phone', '', 'form-control text-white', '', 'Phone', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Image</label>' . '<div class="custom-file form-control">', '<label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose file</label>' . '</div>' . '</div>', 'file', 'user_image', 'image/png, image/jpeg, image/jpg', 'custom-file-input text-white', '', '', '');
        HtmlHelper::input('<div class="form-group">' . '<label>Address</label>', '</div>', 'text', 'user_address', '', 'form-control text-white', '', 'Address', '');
        HtmlHelper::selectOption('<div class="form-group">' . '<label>Role</label>', '</div>', 'user_role', 'form-control text-white', '', '0', 'Client', '', '1', 'Admin', 'd-none', '', '', 'd-none', '', '', 'd-none', '', '');
        HtmlHelper::submit('<div class="mt-4">', '<a class="btn btn-dark" href="' . _MANAGE_DEFAULT . '/user/list/8/1">Cancel</a>' . '</div>', 'Submit', 'btn btn-primary mr-2');
        HtmlHelper::formClose();
        ?>
    </div>
  </div>
</div>