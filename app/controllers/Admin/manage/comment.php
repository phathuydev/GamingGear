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
  public function index()
  {
      $getAllCommentProduct = $this->province->getAllCommentProduct();
      $this->data['sub_content']['getAllCommentProduct'] = $getAllCommentProduct;
      $getAllCommentPost = $this->province->getAllCommentPost();
      $this->data['sub_content']['getAllCommentPost'] = $getAllCommentPost;
    $title = 'List Comment';
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/comment/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function comment_product_detail($product_id = 0)
    {
        $getCommentProduct = $this->province->getCommentProduct($product_id);
        $this->data['sub_content']['getCommentProduct'] = $getCommentProduct;
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
            $response->redirect('admin/manage/comment/comment_product_detail/' . $product_id . '');
        }
        $title = 'Comment Product Detail';
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/comment/comment_product_detail';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function comment_product_reply($comment_product_id = 0)
    {
        $getReplyCommentProduct = $this->province->getReplyCommentProduct($comment_product_id);
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
            $response->redirect('admin/manage/comment/comment_product_reply/' . $comment_product_id . '');
        }
        $title = 'Comment Product Reply';
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/comment/comment_product_reply';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function comment_post_detail($comment_post_id = 0)
    {
        $getCommentPost = $this->province->getCommentPost($comment_post_id);
        $this->data['sub_content']['getCommentPost'] = $getCommentPost;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $comment_post_id = $_POST['comment_post_id'];
            $post_id = $_POST['post_id'];
            $data = [
                'is_delete' => 1,
                'user_delete' => Session::data('admin_login'),
                'update_at' => date("Y-m-d H:i:s")
            ];
            $this->province->updateIsdeleteCommentPost($data, $comment_post_id);
            $response = new Response();
            $response->redirect('admin/manage/comment/comment_post_detail/' . $post_id . '');
        }
        $title = 'Comment Post Detail';
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/comment/comment_post_detail';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function comment_post_reply($comment_post_id = 0)
  {
      $getReplyCommentPost = $this->province->getReplyCommentPost($comment_post_id);
      $this->data['sub_content']['getReplyCommentPost'] = $getReplyCommentPost;
      $this->data['sub_content']['comment_post_id'] = $comment_post_id;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $reply_post_id = $_POST['reply_post_id'];
          $comment_post_id = $_POST['comment_post_id'];
          $data = [
              'is_delete' => 1,
              'user_delete' => Session::data('admin_login'),
              'update_at' => date("Y-m-d H:i:s"),
          ];
          $this->province->updateIsdeleteReplyCommentPost($data, $reply_post_id);
          $response = new Response();
          $response->redirect('admin/manage/comment/comment_post_reply/' . $comment_post_id . '');
      }
      $title = 'Comment Post Reply';
    $this->data['pages_title'] = $title;
      $this->data['body'] = 'admin/comment/comment_post_reply';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
