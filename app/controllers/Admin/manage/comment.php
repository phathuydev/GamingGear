<?php
class Comment extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      if (Session::data('admin_login') === null) {
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
            $comment_product_id = $_POST['comment_product_id'];
            $product_id = $_POST['product_id'];
            $data = [
                'is_delete' => 1,
                'user_delete' => Session::data('admin_login'),
                'update_at' => date("Y-m-d H:i:s"),
            ];
            $this->province->updateIsdeleteCommentProduct($data, $comment_product_id);
            $response = new Response();
            $response->redirect('admin/manage/comment/comment_product_detail/1/8/1');
        }
        $title = 'Comment Product Detail';
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/comment/comment_product_detail';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function comment_product_reply($comment_product_id = 0, $per_pages = 8, $pages = 1)
    {
        $countCommentProductReplyId = $this->province->countCommentProductReplyId($comment_product_id);
        $this->data['sub_content']['countCommentProductReplyId'] = $countCommentProductReplyId;
        $offset = ($pages - 1) * $per_pages;
        $totalPages = ceil($countCommentProductReplyId['countCommentProductReplyId'] / $per_pages);
        $this->data['sub_content']['totalPages'] = $totalPages;
        $this->data['sub_content']['per_pages'] = $per_pages;
        $this->data['sub_content']['pages'] = $pages;
        $getReplyCommentProduct = $this->province->getReplyCommentProduct($comment_product_id, $per_pages, $offset);
        $this->data['sub_content']['getReplyCommentProduct'] = $getReplyCommentProduct;
        $this->data['sub_content']['comment_product_id'] = $comment_product_id;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $reply_product_id = $_POST['reply_product_id'];
            $comment_product_id = $_POST['comment_product_id'];
            $data = [
                'is_delete' => 1,
                'user_delete' => Session::data('admin_login'),
                'update_at' => date("Y-m-d H:i:s"),
            ];
            $this->province->updateIsdeleteReplyCommentProduct($data, $reply_product_id);
            $response = new Response();
            $response->redirect('admin/manage/comment/comment_product_reply/2/8/1');
        }
        $title = 'Comment Product Reply';
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/comment/comment_product_reply';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function comment_post_detail($comment_post_id = 0, $per_pages = 8, $pages = 1)
    {
        $countCommentPostId = $this->province->countCommentPostId($comment_post_id);
        $this->data['sub_content']['countCommentPostId'] = $countCommentPostId;
        $offset = ($pages - 1) * $per_pages;
        $totalPages = ceil($countCommentPostId['countCommentPostId'] / $per_pages);
        $this->data['sub_content']['totalPages'] = $totalPages;
        $this->data['sub_content']['per_pages'] = $per_pages;
        $this->data['sub_content']['pages'] = $pages;
        $getCommentPost = $this->province->getCommentPost($comment_post_id, $per_pages, $offset);
        $this->data['sub_content']['getCommentPost'] = $getCommentPost;
        $this->data['sub_content']['comment_post_id'] = $comment_post_id;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $comment_post_id = $_POST['comment_post_id'];
            $data = [
                'is_delete' => 1,
                'user_delete' => Session::data('admin_login'),
                'update_at' => date("Y-m-d H:i:s")
            ];
            $this->province->updateIsdeleteCommentPost($data, $comment_post_id);
            $response = new Response();
            $response->redirect('admin/manage/comment/comment_post_detail/14/8/1');
        }
        $title = 'Comment Post Detail';
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/comment/comment_post_detail';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function comment_post_reply($comment_post_id = 0, $per_pages = 8, $pages = 1)
  {
      $countCommentPostReplyId = $this->province->countCommentPostReplyId($comment_post_id);
      $this->data['sub_content']['countCommentPostReplyId'] = $countCommentPostReplyId;
      $offset = ($pages - 1) * $per_pages;
      $totalPages = ceil($countCommentPostReplyId['countCommentPostReplyId'] / $per_pages);
      $this->data['sub_content']['totalPages'] = $totalPages;
      $this->data['sub_content']['per_pages'] = $per_pages;
      $this->data['sub_content']['pages'] = $pages;
      $getReplyCommentPost = $this->province->getReplyCommentPost($comment_post_id, $per_pages, $offset);
      $this->data['sub_content']['getReplyCommentPost'] = $getReplyCommentPost;
      $this->data['sub_content']['comment_post_id'] = $comment_post_id;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $reply_post_id = $_POST['reply_post_id'];
          $comment_post_id = $_POST['comment_post_id'];
          $data = [
              'is_delete' => 1,
              'user_delete' => Session::data('admin_login'),
              'update_at' => date("Y-m-d H:i:s")
          ];
          $this->province->updateIsdeleteReplyCommentPost($data, $reply_post_id);
          $response = new Response();
          $response->redirect('admin/manage/comment/comment_post_reply/1/8/1');
      }
      $title = 'Comment Post Reply';
    $this->data['pages_title'] = $title;
      $this->data['body'] = 'admin/comment/comment_post_reply';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
