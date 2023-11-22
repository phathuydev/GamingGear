<?php
class User extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('UserModel');
  }

  public function index()
  {
      $listUser = $this->province->getAlluser();
    $title = 'List User';
      $this->data['sub_content']['listUser'] = $listUser;
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $user_id = $_POST['user_id'];
          $is_delete = $_POST['is_delete'];
          $user_delete = $_POST['user_delete'];
          $create_at = $_POST['create_at'];
          $update_at = $_POST['update_at'];
          $user_create = $_POST['user_create'];
          $user_update = $_POST['user_update'];
          $data = [
              'is_delete' => $is_delete,
              'user_delete' => $user_delete,
              'create_at' => $create_at,
              'update_at' => $update_at,
              'user_create' => $user_create,
              'user_update' => $user_update
          ];
          $this->province->updateIsdelete($data, $user_id);
          $response = new Response();
          $response->redirect('admin/manage/user');
      }
    $this->data['body'] = 'admin/user/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function user_add()
  {
    $title = 'Add User';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $user_name = $_POST['user_name'];
          $user_email = $_POST['user_email'];
          $user_password = $_POST['user_password'];
          $user_phone = $_POST['user_phone'];
          $user_image = $_FILES['user_image']['name'];
          $user_address = $_POST['user_address'];
          $user_role = $_POST['user_role'];
          $user_create = Session::data('admin_login');
          $user_update = Session::data('admin_login');
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . basename($user_image);
          move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file);
          $data = [
              'user_name' => $user_name,
              'user_password' => $user_password,
              'user_email' => $user_email,
              'user_phone' => $user_phone,
              'user_image' => $user_image,
              'user_image_path' => $target_dir,
              'user_address' => $user_address,
              'user_role' => $user_role,
              'user_create' => $user_create,
              'user_update' => $user_update
          ];
          $this->province->insertUser($data);
          $response = new Response();
          $response->redirect('admin/manage/user');
      }
    $this->data['body'] = 'admin/user/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function user_edit($user_id = 0)
  {
      $firstUser = $this->province->getFirstUser($user_id);
      $title = 'Update User';
      $this->data['sub_content']['firstUser'] = $firstUser;
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $user_locked = $_POST['user_locked'];
          $create_at = $_POST['create_at'];
          $update_at = $_POST['update_at'];
          $user_create = $_POST['user_create'];
          $user_update = Session::data('admin_login');
          $data = [
              'user_locked' => $user_locked,
              'create_at' => $create_at,
              'update_at' => $update_at,
              'user_create' => $user_create,
              'user_update' => $user_update
          ];
          $this->province->updateUser($data, $user_id);
          $response = new Response();
          $response->redirect('admin/manage/user');
      }
    $this->data['body'] = 'admin/user/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
