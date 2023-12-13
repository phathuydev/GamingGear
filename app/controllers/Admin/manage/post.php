<?php
class Post extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    if (empty(Session::data('admin_login'))) {
      $response = new Response();
      $response->redirect('lgAdmin');
    }
    $this->province = $this->model('PostModel');
  }
  public function list($per_pages = 8, $pages = 1)
  {
    $countPostId = $this->province->countPostId();
    $this->data['sub_content']['countPostId'] = $countPostId;
    $offset = ($pages - 1) * $per_pages;
    $totalPages = ceil($countPostId['countPostId'] / $per_pages);
    $this->data['sub_content']['totalPages'] = $totalPages;
    $this->data['sub_content']['per_pages'] = $per_pages;
    $this->data['sub_content']['pages'] = $pages;
    $listPost = $this->province->getAllPost($per_pages, $offset);
    $this->data['sub_content']['listPost'] = $listPost;
    $title = 'List Post';
    $this->data['pages_title'] = $title;
    if (isset($_POST['deletePost'])) {
      $post_id = $_POST['post_id'];
      $data = [
        'is_delete' => 1,
        'user_delete' => Session::data('admin_login'),
      ];
      $this->province->updateIsDelete($data, $post_id);
      $response = new Response();
      $response->redirect('admin/manage/post/list/8/' . $pages . '');
    } elseif (isset($_POST['restorePost'])) {
      $post_id = $_POST['post_id'];
      $data = [
        'is_delete' => 0,
        'user_delete' => 0
      ];
      $this->province->updateIsDelete($data, $post_id);
      $response = new Response();
      $response->redirect('admin/manage/post/list/8/' . $pages . '');
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
      $response->redirect('admin/manage/post/list/8/1');
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
        'update_at' => date("Y-m-d H:i:s"),
        'user_update' => Session::data('admin_login'),
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
      $response->redirect('admin/manage/post/list/8/1');
    }
    $title = 'Edit Post';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/post/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
