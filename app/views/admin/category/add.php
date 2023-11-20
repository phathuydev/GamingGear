<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            <?php
            HtmlHelper::formOpen('post', '', 'multipart/form-data', 'return validateCategories()');
            HtmlHelper::input('<div class="form-group">' . '<label>Id</label>', '</div>', 'text', 'Id', '', 'form-control', '', 'Id', '');
            HtmlHelper::input('<div class="form-group">' . '<label>Image</label>' . '<div class="custom-file form-control">', '<label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose file</label>' . '</div>' . '</div>', 'file', 'Image', 'image/png, image/jpeg, image/jpg', 'custom-file-input text-white', '', '', '');
            HtmlHelper::input('<div class="form-group">' . '<label>Name</label>', '</div>', 'text', 'name', '', 'form-control', '', 'name', '');
            HtmlHelper::submit('<div class="mt-4">', '<a class="btn btn-dark" href="' . _MANAGE_DEFAULT . '/category">Cancel</a>' . '</div>', 'insertCategory', 'Submit', 'btn btn-primary mr-2');
            HtmlHelper::formClose();
            ?>
        </div>
    </div>
</div>