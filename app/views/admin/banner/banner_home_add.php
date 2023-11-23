<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Banner Home</h4>
            <form class="forms-sample" method="post" enctype='multipart/form-data'
                  onsubmit="return validateAddBannerHome()">
                <div class="form-group border-0">
                    <label>Banners Home<em class="text-danger"> * </em></label>
                    <div class="custom-file form-control">
                        <input type="file" class="form-control custom-file-input text-white" name="banner_home_image[]"
                               id="banner_home_image" accept='image/png, image/jpeg, image/jpg' multiple>
                        <label class="custom-file-label bg-transparent border text-muted d-flex align-items-center">Choose
                            file</label>
                    </div>
                    <p class="text-danger m-2" id="error_banner_home_image"></p>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a class="btn btn-dark" href="<? echo _MANAGE_DEFAULT ?>/banner">Cancel</a>
            </form>
        </div>
    </div>
</div>