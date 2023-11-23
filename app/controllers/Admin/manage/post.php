<?php
class Post extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      if (Session::data('admin_login') === null) {
          $response = new Response();
          $response->redirect('lgAdmin');
      }
      $this->province = $this->model('PostModel');
  }
  public function index()
  {
      $listPost = $this->province->getAllPost();
    $title = 'List Post';
      $this->data['sub_content']['listPost'] = $listPost;
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $post_id = $_POST['post_id'];
          $post_detail_id = $_POST['post_detail_id'];
          $data = [
              'is_delete' => 1,
              'user_delete' => Session::data('admin_login'),
              'update_at' => date("Y-m-d H:i:s")
          ];
          $this->province->updateIsDelete($data, $post_id, $post_detail_id);
          $response = new Response();
          $response->redirect('admin/manage/post');
      }
    $this->data['body'] = 'admin/post/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function post_add()
  {
      $getAllCategory = $this->province->getAllCategory();
      $this->data['sub_content']['getAllCategory'] = $getAllCategory;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Insert Posts
          $category_id_section = $_POST['category_id_section'];
          $post_image_section = $_FILES['post_image_section']['name'];
          $section_dir = 'public/assets/admin/uploaded_img/';
          $section_file = $section_dir . basename($post_image_section);
          move_uploaded_file($_FILES["post_image_section"]["tmp_name"], $section_file);
          $data_section = [
              'post_image' => $post_image_section,
              'post_image_path' => $section_dir,
              'category_id' => $category_id_section,
              'user_create' => Session::data('admin_login'),
              'user_update' => Session::data('admin_login')
          ];
          $post_id = $this->province->insertPost($data_section);
          // Insert Posts_Detail
          $post_detail_title = $_POST['post_title_content'];
          $post_detail_image = $_FILES['post_image_content']['name'];
          $post_detail_content = $_POST['post_content_content'];
          $content_dir = 'public/assets/admin/uploaded_img/';
          $content_file = $content_dir . basename($post_detail_image);
          move_uploaded_file($_FILES["post_image_content"]["tmp_name"], $content_file);
          $data_content = [
              'post_id' => $post_id,
              'post_detail_title' => $post_detail_title,
              'post_detail_image' => $post_detail_image,
              'post_detail_image_path' => $content_dir,
              'post_detail_content' => $post_detail_content
          ];
          $this->province->insertPostDetail($data_content, $post_id);
          $response = new Response();
          $response->redirect('admin/manage/post');
      }
    $title = 'Add Post';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/post/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function post_detail($post_id)
    {
        $getPostDetail = $this->province->getPostDetail($post_id);
        $this->data['sub_content']['getPostDetail'] = $getPostDetail;
        $this->data['sub_content']['post_id'] = $post_id;
        $title = 'Post Detail';
        $this->data['sub_content']['pages_title'] = $title;
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/post/detail';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function post_edit($post_id, $post_detail_id)
  {
      $getPostEdit = $this->province->getPostEdit($post_id, $post_detail_id);
      $this->data['sub_content']['getPostEdit'] = $getPostEdit;
      $this->data['sub_content']['post_id'] = $post_id;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Insert Posts
          $post_image_default = $_POST['post_image_default'];
          $category_id_section = $_POST['category_id_section'];
          $post_image_section = $_FILES['post_image_section']['name'];
          $section_dir = 'public/assets/admin/uploaded_img/';
          $section_file = $section_dir . basename($post_image_section);
          move_uploaded_file($_FILES["post_image_section"]["tmp_name"], $section_file);
          $data_section = [
              'post_image' => $post_image_section == null ? $post_image_default : $post_image_section,
              'post_image_path' => $section_dir,
              'category_id' => $category_id_section
          ];
          $this->province->updatePost($data_section, $post_id);
          // Insert Posts_Detail
          $post_detail_title = $_POST['post_title_content'];
          $post_detail_image = $_FILES['post_image_content']['name'];
          $post_detail_image_default = $_POST['post_detail_image_default'];
          $post_detail_content = $_POST['post_content_content'];
          $content_dir = 'public/assets/admin/uploaded_img/';
          $content_file = $content_dir . basename($post_detail_image);
          move_uploaded_file($_FILES["post_image_content"]["tmp_name"], $content_file);
          $data_content = [
              'post_detail_title' => $post_detail_title,
              'post_detail_image' => $post_detail_image == null ? $post_detail_image_default : $post_detail_image,
              'post_detail_image_path' => $content_dir,
              'post_detail_content' => $post_detail_content
          ];
          $this->province->UpdatePostDetail($data_content, $post_detail_id);
          $response = new Response();
          $response->redirect('admin/manage/post');
      }
    $title = 'Edit Post';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/post/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
