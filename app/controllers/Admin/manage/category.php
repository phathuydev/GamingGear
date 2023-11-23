<?php
class Category extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      if (Session::data('admin_login') === null) {
          $response = new Response();
          $response->redirect('lgAdmin');
      }
      $this->province = $this->model('CategoryModel');
  }
  public function index()
  {
      $listCategory = $this->province->getAllcategory();
      $this->data['sub_content']['listCategory'] = $listCategory;
      $countPostCategory = $this->province->countPostCategory();
      $this->data['sub_content']['countPostCategory'] = $countPostCategory;
      $countProductCategory = $this->province->countProductCategory();
      $this->data['sub_content']['countProductCategory'] = $countProductCategory;
    $title = 'List Category';
      $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $category_id = $_POST['category_id'];
          $this->province->deleteBannerHome($category_id);
          $response = new Response();
          $response->redirect('admin/manage/category');
      }
    $this->data['body'] = 'admin/category/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function category_add()
  {
    $title = 'Add Category';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $name = $_POST['name'];
          $checkNameCategory = $this->province->getNameCategory($name);
          if ($checkNameCategory) {
              Session::flash('nameExist', 'Name Already Exist');
          } else {
              $image = $_FILES['image']['name'];
              $user_create = Session::data('admin_login');
              $user_update = Session::data('admin_login');
              $target_dir = 'public/assets/admin/uploaded_img/';
              $target_file = $target_dir . $image;
              move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
              $data = [
                  'user_create' => $user_create,
                  'user_update' => $user_update,
                  'category_image_path' => $target_dir,
                  'category_image' => $image,
                  'category_name' => $name
              ];
              $this->province->insertCategory($data);
              $response = new Response();
              $response->redirect('admin/manage/category');
      }
      }
      $this->data['sub_content']['nameExist'] = Session::flash('nameExist');
    $this->data['body'] = 'admin/category/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function category_edit($category_id = 0)
  {
      $firstCategory = $this->province->getFirstCategory($category_id);
    $title = 'Edit Category';
      $this->data['sub_content']['firstCategory'] = $firstCategory;
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $name = $_POST['name'];
          $nameDefault = $_POST['nameDefault'];
          if ($name === $nameDefault) {
              $image = $_FILES['image']['name'];
              $user_update = Session::data('admin_login');
              $target_dir = 'public/assets/admin/uploaded_img/';
              $target_file = $target_dir . $image;
              move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
              $data = [
                  'category_name' => $name,
                  'category_image' => $image == null ? $firstCategory['category_image'] : $image,
                  'user_update' => $user_update
              ];
              $this->province->updateCategory($data, $category_id);
              $response = new Response();
              $response->redirect('admin/manage/category');
          } elseif ($name !== $nameDefault) {
              $checkNameCategory = $this->province->getNameCategory($name);
              if ($checkNameCategory) {
                  Session::flash('nameExist', 'Name Already Exist');
              } else {
                  $image = $_FILES['image']['name'];
          $user_update = Session::data('admin_login');
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . $image;
          move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
          $data = [
              'category_name' => $name,
              'category_image' => $image == null ? $firstCategory['category_image'] : $image,
              'user_update' => $user_update
          ];
          $this->province->updateCategory($data, $category_id);
          $response = new Response();
          $response->redirect('admin/manage/category');
              }
          }
      }
      $this->data['sub_content']['nameExist'] = Session::flash('nameExist');
    $this->data['body'] = 'admin/category/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
