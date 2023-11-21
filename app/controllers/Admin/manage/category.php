<?php
class Category extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('CategoryModel');
  }
  public function index()
  {
      $listCategory = $this->province->getAllcategory();
    $title = 'List Category';
      $this->data['sub_content']['listCategory'] = $listCategory;
      $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $category_id = $_POST['user_id'];
          $is_delete = $_POST['is_delete'];
          $user_delete = Session::data('admin_login');
          $data = [
              'is_delete' => $is_delete,
              'user_delete' => $user_delete,
          ];
          $this->province->updateIsdelete($data, $category_id);
          $response = new Response();
          $response->redirect('admin/manage/category');
      }
    $this->data['body'] = 'admin/category/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function category_detail($id)
  {
    $title = 'Category Detail';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/category/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function category_add()
  {
    $title = 'Add Category';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $image = $_FILES['image']['name'];
          $name = $_POST['name'];
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
          $image = $_FILES['image']['name'];
          $name = $_POST['name'];
          $user_update = Session::data('admin_login');
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . $image;
          move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
          $data = [
              'user_update' => $user_update,
              'category_image_path' => $target_dir == null ? $firstCategory['category_image_path'] : $target_dir,
              'category_image' => $image == null ? $firstCategory['category_image'] : $image,
              'category_name' => $name
          ];
          $this->province->updateCategory($data, $category_id);
          $response = new Response();
          $response->redirect('admin/manage/category');
      }
    $this->data['body'] = 'admin/category/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
