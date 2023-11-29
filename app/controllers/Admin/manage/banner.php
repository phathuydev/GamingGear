<?php
class Banner extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      if (Session::data('admin_login') === null) {
          $response = new Response();
          $response->redirect('lgAdmin');
      }
      $this->province = $this->model('BannerModel');
  }

    public function list($tab = 1, $per_pages = 8, $pages = 1)
  {
      $countBannerHomeId = $this->province->countBannerHomeId();
      $this->data['sub_content']['countBannerHomeId'] = $countBannerHomeId;
      $offset = ($pages - 1) * $per_pages;
      $totalPages = ceil($countBannerHomeId['countBannerHomeId'] / $per_pages);
      $this->data['sub_content']['totalPages'] = $totalPages;
      $this->data['sub_content']['per_pages'] = $per_pages;
      $this->data['sub_content']['pages'] = $pages;
      $getBannerHome = $this->province->getBannerHome($per_pages, $offset);
      $this->data['sub_content']['getBannerHome'] = $getBannerHome;
      $this->data['sub_content']['tab'] = $tab;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $banner_home_id = $_POST['banner_home_id'];
          $this->province->deleteBannerHome($banner_home_id);
          $response = new Response();
          $response->redirect('admin/manage/banner/list/1/8/1');
      }
      $getBannerProduct = $this->province->getBannerProduct();
      $this->data['sub_content']['getBannerProduct'] = $getBannerProduct;
      $title = 'List Banner';
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/banner/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function banner_product_detail($product_id)
    {
        $getBannerProductDetail = $this->province->getBannerProductDetail($product_id);
        $this->data['sub_content']['getBannerProductDetail'] = $getBannerProductDetail;
        $this->data['sub_content']['product_id'] = $product_id;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $banner_product_id = $_POST['banner_product_id'];
            $product_id = $_POST['product_id'];
            $this->province->deleteBannerProduct($banner_product_id);
            $response = new Response();
            $response->redirect('admin/manage/banner/banner_product_detail/1');
        }
        $title = 'Comment Product Detail';
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/banner/banner_product_detail';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function banner_home_add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $target_dir = 'public/assets/admin/uploaded_img/';
            foreach ($_FILES['banner_home_image']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['banner_home_image']['name'][$key];
                $file_tmp = $_FILES['banner_home_image']['tmp_name'][$key];
                $target_file = $target_dir . basename($file_name);
                move_uploaded_file($file_tmp, $target_file);
                $data = [
                    'banner_home_image' => $file_name,
                    'banner_home_path' => $target_dir,
                    'user_create' => Session::data('admin_login'),
                    'user_update' => Session::data('admin_login')
                ];
                $this->province->insertBannerHome($data);
            }
            $response = new Response();
            $response->redirect('admin/manage/banner/list/1/8/1');
        }
        $title = 'Banner Home Add';
        $this->data['sub_content']['pages_title'] = [];
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/banner/banner_home_add';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function banner_home_edit($banner_home_id = 0)
  {
      $getBannerEdit = $this->province->getBannerEdit($banner_home_id);
      $this->data['sub_content']['getBannerEdit'] = $getBannerEdit;
      $this->data['sub_content']['banner_home_id'] = $banner_home_id;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $file_name = $_FILES['banner_home_image']['name'];
          $banner_home_id = $_POST['banner_home_id'];
          $banner_home_image = $_POST['banner_home_image'];
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . basename($file_name);
          move_uploaded_file($_FILES['banner_home_image']['tmp_name'], $target_file);
          $data = [
              'banner_home_image' => $file_name == null ? $banner_home_image : $file_name,
              'banner_home_path' => $target_dir,
              'update_at' => date('Y-m-d H:i:s'),
              'user_update' => Session::data('admin_login')
          ];
          $this->province->updateBannerHome($data, $banner_home_id);
          $response = new Response();
          $response->redirect('admin/manage/banner/list/1/8/1');
      }
      $title = 'Edit Banner Home';
    $this->data['pages_title'] = $title;
      $this->data['body'] = 'admin/banner/banner_home_edit';
      $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function banner_product_add($product_id)
    {
        $this->data['sub_content']['product_id'] = $product_id;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $target_dir = 'public/assets/admin/uploaded_img/';
            $product_id = $_POST['product_id'];
            foreach ($_FILES['banner_product_image']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['banner_product_image']['name'][$key];
                $file_tmp = $_FILES['banner_product_image']['tmp_name'][$key];
                $target_file = $target_dir . basename($file_name);
                move_uploaded_file($file_tmp, $target_file);
                $data = [
                    'banner_product_image' => $file_name,
                    'product_id' => $product_id,
                    'banner_product_path' => $target_dir,
                    'user_create' => Session::data('admin_login'),
                    'user_update' => Session::data('admin_login')
                ];
                $this->province->insertBannerProduct($data, $product_id);
            }
            $response = new Response();
            $response->redirect('admin/manage/banner/banner_product_detail/' . $product_id . '');
        }
        $title = 'Banner Product Add';
        $this->data['sub_content']['pages_title'] = [];
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/banner/banner_product_add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function banner_product_edit($banner_product_id = 0)
  {
      $getBannerProductEdit = $this->province->getBannerProductEdit($banner_product_id);
      $this->data['sub_content']['getBannerProductEdit'] = $getBannerProductEdit;
      $this->data['sub_content']['banner_product_id'] = $banner_product_id;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $file_name = $_FILES['banner_product_image']['name'];
          $banner_product_id = $_POST['banner_product_id'];
          $product_id = $_POST['product_id'];
          $banner_product_image = $_POST['banner_product_image'];
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . basename($file_name);
          move_uploaded_file($_FILES['banner_product_image']['tmp_name'], $target_file);
          $data = [
              'banner_product_image' => $file_name == null ? $banner_product_image : $file_name,
              'banner_product_path' => $target_dir,
              'update_at' => date('Y-m-d H:i:s'),
              'user_update' => Session::data('admin_login')
          ];
          $this->province->updateBannerProduct($data, $banner_product_id);
          $response = new Response();
          $response->redirect('admin/manage/banner/banner_product_detail/1');
      }
      $title = 'Edit Banner Product';
    $this->data['pages_title'] = $title;
      $this->data['body'] = 'admin/banner/banner_product_edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
