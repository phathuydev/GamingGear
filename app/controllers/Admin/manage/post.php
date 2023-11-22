<?php
class Post extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('PostModel');
  }
  public function index()
  {
      $listPost = $this->province->getAllPost();
    $title = 'List Post';
      $this->data['sub_content']['listPost'] = $listPost;
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
    $this->data['body'] = 'admin/post/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function post_add()
  {
    $title = 'Add Post';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/post/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function post_edit()
  {
    $title = 'Edit Post';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/post/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
