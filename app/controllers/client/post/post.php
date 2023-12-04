<?php
class Post extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('PostModel');
  }
  public function index($per_pages = 8, $pages = 1)
  {
    $countProductId = $this->model('ProductModel')->countProductId();
    $this->data['sub_content']['countProductId'] = $countProductId;
    $offset = ($pages - 1) * $per_pages;
    $totalPages = ceil($countProductId['countProductId'] / $per_pages);
    $this->data['sub_content']['totalPages'] = $totalPages;
    $this->data['sub_content']['per_pages'] = $per_pages;
    $this->data['sub_content']['pages'] = $pages;
    $listPost = $this->province->getAllPost($per_pages, $offset);
    $this->data['sub_content']['listPost'] = $listPost;
    $title = 'Post List';
    $this->data['pages_title'] = $title;
    $this->data['css_post'] = _WEB_ROOT . '/public/assets/client/css/post.css';
    $this->data['sub_content']['post'] = [];
    $this->data['content'] = 'client/post/list';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function post_detail($post_id)
  {
    $getPostDetail = $this->province->getPostDetail($post_id);
    $this->data['sub_content']['getPostDetail'] = $getPostDetail;
    $this->data['sub_content']['post_id'] = $post_id;
    $getCommentPost = $this->model('CommentModel')->getCommentPostClient($post_id);
    $this->data['sub_content']['getComment'] = $getCommentPost;
    $this->data['sub_content']['client_login'] = Session::data('client_login');
    if (isset($_POST['submit_comment'])) {
      $user_id = $_POST['user_id'];
      $post_id = $_POST['post_id'];
      $comment_content = $_POST['comment_content'];
      $data = [
        'user_id' => $user_id,
        'post_id' => $post_id,
        'comment_content' => $comment_content
      ];
      $this->province->addComment($data);
      $response = new Response();
      $response->redirect('client/post/post/post_detail/' . $post_id . '');
    } elseif (isset($_POST['reply_comment_father'])) {
      $user_id = $_POST['user_id'];
      $post_id = $_POST['post_id'];
      $comment_content = $_POST['comment_content'];
      $parent_id = $_POST['parent_id'];
      $data = [
        'user_id' => $user_id,
        'post_id' => $post_id,
        'comment_content' => $comment_content,
        'parent_id' => $parent_id
      ];
      $this->province->addComment($data);
      $response = new Response();
      $response->redirect('client/post/post/post_detail/' . $post_id . '');
    } elseif (isset($_POST['reply_comment_son'])) {
      $user_id = $_POST['user_id'];
      $post_id = $_POST['post_id'];
      $comment_content = $_POST['comment_content'];
      $parent_id = $_POST['parent_id'];
      $data = [
        'user_id' => $user_id,
        'post_id' => $post_id,
        'comment_content' => $comment_content,
        'parent_id' => $parent_id
      ];
      $this->province->addComment($data);
      $response = new Response();
      $response->redirect('client/post/post/post_detail/' . $post_id . '');
    } elseif (isset($_POST['edit_comment_father'])) {
      $comment_content_new = $_POST['comment_content_new'];
      $comment_id = $_POST['comment_id'];
      $data = [
        'comment_content' => $comment_content_new,
        'comment_id' => $comment_id
      ];
      $this->province->editCommentProduct($data, $comment_id);
      $response = new Response();
      $response->redirect('client/post/post/post_detail/' . $post_id . '');
    } elseif (isset($_POST['edit_comment_son'])) {
      $comment_content_new = $_POST['comment_content_new'];
      $comment_id = $_POST['comment_id'];
      $data = [
        'comment_content' => $comment_content_new,
        'comment_id' => $comment_id
      ];
      $this->province->editCommentProduct($data, $comment_id);
      $response = new Response();
      $response->redirect('client/post/post/post_detail/' . $post_id . '');
    } elseif (isset($_POST['deleteComment'])) {
      $user_delete = $_POST['user_delete'];
      $comment_id = $_POST['comment_id'];
      $data = [
        'is_delete' => 1,
        'user_delete' => $user_delete,
        'update_at' => date('Y-m-d H:i:s')
      ];
      $this->province->updateIsdeleteCommentProduct($data, $comment_id);
      $response = new Response();
      $response->redirect('client/post/post/post_detail/' . $post_id . '');
    }
    $title = 'Post Detail';
    $this->data['pages_title'] = $title;
    $this->data['content'] = 'client/post/detail';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
