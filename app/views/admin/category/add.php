<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            <form class="forms-sample" method="post" enctype='multipart/form-data'>
                <div class="form-group border-0">
                    <label>Image</label>
                    <div class="custom-file form-control">
                        <input type="file" class="form-control custom-file-input text-white" name="image"
                               placeholder="Image" accept='image/png, image/jpeg, image/jpg'>
                        <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                            file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/category">Cancel</a>
            </form>
        </div>
    </div>
</div>