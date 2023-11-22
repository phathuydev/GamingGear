<?php
class Banner extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('BannerModel');
  }
  public function index()
  {
    $title = 'List banner';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/banner/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function bannerhome_add()
    {
        $title = 'Add banner';
        $this->data['sub_content']['pages_title'] = $title;
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/banner/addhome';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function bannerhome_edit()
    {
        $title = 'Edit banner';
        $this->data['sub_content']['pages_title'] = $title;
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/banner/edit';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function bannerPD_add()
  {
    $title = 'Add banner';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
      if (isset($_POST['insertBannerPD'])) {
          $banner_product_image = $_FILES['banner_product_image']['name'];
          // $user_create = $_POST['user_create'];
          $user_update = $_POST['user_update'];
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . basename($banner_product_image);
          move_uploaded_file($_FILES["banner_product_image"]["tmp_name"], $target_file);
          $data = [

              'banner_product_image' => $banner_product_image,
              'banner_product_path' => $target_dir,
              // 'user_create' => $user_create,
              'user_update' => $user_update
          ];
          $this->province->insertBannerPD($data);
          $response = new Response();
          $response->redirect('admin/manage/banner');
      }
    $this->data['body'] = 'admin/banner/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function bannerproduct_edit()
  {
    $title = 'Edit banner';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/banner/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
