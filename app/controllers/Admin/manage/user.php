<?php
class User extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      if (Session::data('admin_login') === null) {
          $response = new Response();
          $response->redirect('lgAdmin');
      }
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
          $data = [
              'is_delete' => 1,
              'user_delete' => Session::data('admin_login'),
              'update_at' => date("Y-m-d H:i:s"),
              'user_update' => Session::data('admin_login')
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
              'user_create' => Session::data('admin_login'),
              'user_update' => Session::data('admin_login')
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
      $this->data['sub_content']['firstUser'] = $firstUser;
      $this->data['sub_content']['user_id'] = $user_id;
      $title = 'Update User';
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $user_locked = $_POST['user_locked'];
          $data = [
              'user_locked' => $user_locked,
              'update_at' => date("Y-m-d H:i:s"),
              'user_update' => Session::data('admin_login')
          ];
          $this->province->updateUser($data, $user_id);
          $response = new Response();
          $response->redirect('admin/manage/user');
      }
    $this->data['body'] = 'admin/user/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
