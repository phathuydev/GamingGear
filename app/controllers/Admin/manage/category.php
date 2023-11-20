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
      if (isset($_POST['updateIsdelete'])) {
          $category_id = $_POST['category_id'];
          $create_at = $_POST['create_at'];
          $update_at = $_POST['update_at'];
          $data = [
              'create_at' => $create_at,
              'update_at' => $update_at
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
      if (isset($_POST['insertCategory'])) {
          $category_id = $_POST['category_id'];
          $category_image = $_POST['category_image']['name'];
          $category_name = $_POST['category_name'];
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . basename($category_image);
          move_uploaded_file($_FILES["category_image"]["tmp_name"], $target_file);
          $data = [
              'category_id' => $category_id,
              'category_image' => $category_image,
              'category_name' => $category_name
          ];
          $this->province->insertCaterogy($data);
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
      if (isset($_POST['updateCategory'])) {
          $create_at = $_POST['create_at'];
          $update_at = $_POST['update_at'];
          $data = [
              'create_at' => $create_at,
              'update_at' => $update_at,
          ];
          $this->province->updateCategory($data);
          $response = new Response();
          $response->redirect('admin/manage/category');
      }
    $this->data['body'] = 'admin/category/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
