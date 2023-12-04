<?php
class Comment extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    if (empty(Session::data('admin_login'))) {
      $response = new Response();
      $response->redirect('lgAdmin');
    }
    $this->province = $this->model('CommentModel');
  }
  public function list($tab = 1)
  {
    $getAllCommentProduct = $this->province->getAllCommentProduct();
    $this->data['sub_content']['getAllCommentProduct'] = $getAllCommentProduct;
    $getAllCommentPost = $this->province->getAllCommentPost();
    $this->data['sub_content']['getAllCommentPost'] = $getAllCommentPost;
    $this->data['sub_content']['tab'] = $tab;
    $title = 'List Comment';
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/comment/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function comment_product_detail($product_id = 0, $per_pages = 8, $pages = 1)
  {
    $countCommentProductId = $this->province->countCommentProductId($product_id);
    $this->data['sub_content']['countCommentProductId'] = $countCommentProductId;
    $offset = ($pages - 1) * $per_pages;
    $totalPages = ceil($countCommentProductId['countCommentProductId'] / $per_pages);
    $this->data['sub_content']['totalPages'] = $totalPages;
    $this->data['sub_content']['per_pages'] = $per_pages;
    $this->data['sub_content']['pages'] = $pages;
    $getCommentProduct = $this->province->getCommentProduct($product_id, $per_pages, $offset);
    $this->data['sub_content']['getCommentProduct'] = $getCommentProduct;
    $this->data['sub_content']['product_id'] = $product_id;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $comment_id = $_POST['comment_id'];
      $data = [
        'is_delete' => 1,
        'user_delete' => Session::data('admin_login'),
        'update_at' => date("Y-m-d H:i:s"),
      ];
        $this->province->updateIsdeleteCommentProduct($data, $comment_id);
      $response = new Response();
      $response->redirect('admin/manage/comment/comment_product_detail/' . $product_id . '/' . $per_pages . '/' . $pages . '');
    }
    $title = 'Comment Product Detail';
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/comment/comment_product_detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function comment_post_detail($post_id = 0, $per_pages = 8, $pages = 1)
  {
      $countCommentPostId = $this->province->countCommentPostId($post_id);
    $this->data['sub_content']['countCommentPostId'] = $countCommentPostId;
    $offset = ($pages - 1) * $per_pages;
    $totalPages = ceil($countCommentPostId['countCommentPostId'] / $per_pages);
    $this->data['sub_content']['totalPages'] = $totalPages;
    $this->data['sub_content']['per_pages'] = $per_pages;
    $this->data['sub_content']['pages'] = $pages;
      $getCommentPost = $this->province->getCommentPost($post_id, $per_pages, $offset);
    $this->data['sub_content']['getCommentPost'] = $getCommentPost;
      $this->data['sub_content']['post_id'] = $post_id;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $comment_id = $_POST['comment_id'];
      $data = [
        'is_delete' => 1,
        'user_delete' => Session::data('admin_login'),
        'update_at' => date("Y-m-d H:i:s")
      ];
        $this->province->updateIsdeleteCommentPost($data, $comment_id);
      $response = new Response();
        $response->redirect('admin/manage/comment/comment_post_detail/' . $post_id . '/8/1');
    }
    $title = 'Comment Post Detail';
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/comment/comment_post_detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
