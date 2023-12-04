<?php
class Product extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('ProductModel');
  }
  public function index($per_pages = 8, $pages = 1)
  {
    $countProductId = $this->province->countProductId();
    $this->data['sub_content']['countProductId'] = $countProductId;
    $offset = ($pages - 1) * $per_pages;
    $totalPages = ceil($countProductId['countProductId'] / $per_pages);
    $this->data['sub_content']['totalPages'] = $totalPages;
    $this->data['sub_content']['per_pages'] = $per_pages;
    $this->data['sub_content']['pages'] = $pages;
    $getAllProduct = $this->province->getAllProduct($per_pages, $offset);
    $this->data['sub_content']['getAllProduct'] = $getAllProduct;
    $title = 'Product List';
    $this->data['pages_title'] = $title;
    $this->data['content'] = 'client/product/list';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function product_search($keyWord = '')
  {
    $title = 'Keyword - ' . $keyWord;
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['getProductCategory'] = '';
    $this->data['content'] = 'client/product/search';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function product_detail($product_id = 0, $category_id = 0, $per_pages = 8, $pages = 1)
  {
    $countCommentProductId = $this->model('CommentModel')->countCommentProductId($product_id);
    $this->data['sub_content']['countCommentProductId'] = $countCommentProductId;
    $getBannerProductId = $this->province->getBannerProductId($product_id);
    $this->data['sub_content']['getBannerProductId'] = $getBannerProductId;
    $countProductCategory = $this->province->countProductCategory($category_id);
    $this->data['sub_content']['countProductCategory'] = $countProductCategory;
    $offset = ($pages - 1) * $per_pages;
    $totalPages = ceil($countProductCategory['countProductCategory'] / $per_pages);
    $this->data['sub_content']['totalPages'] = $totalPages;
    $this->data['sub_content']['per_pages'] = $per_pages;
    $this->data['sub_content']['pages'] = $pages;
    $getProductDetail = $this->province->getProductDetail($product_id);
    $this->data['sub_content']['getProductDetail'] = $getProductDetail;
    $this->data['sub_content']['product_id'] = $product_id;
    $this->data['sub_content']['category_id'] = $category_id;
    $getProductCategory = $this->province->getProductCategory($category_id, $per_pages, $offset);
    $this->data['sub_content']['getProductCategory'] = $getProductCategory;
    $getComment = $this->model('CommentModel')->getCommentProductClient($product_id, $per_pages, $pages);
    $this->data['sub_content']['getComment'] = $getComment;
    $this->data['sub_content']['client_login'] = Session::data('client_login');
    $title = 'Product Detail';
    $this->data['pages_title'] = $title;
    if (isset($_POST['submit_comment'])) {
      $user_id = $_POST['user_id'];
      $product_id = $_POST['product_id'];
      $comment_content = $_POST['comment_content'];
      $data = [
        'user_id' => $user_id,
        'product_id' => $product_id,
        'comment_content' => $comment_content
      ];
      $this->province->addComment($data);
      $response = new Response();
      $response->redirect('details/' . $product_id . '/' . $category_id . '');
    } elseif (isset($_POST['reply_comment_father'])) {
      $user_id = $_POST['user_id'];
      $product_id = $_POST['product_id'];
      $comment_content = $_POST['comment_content'];
      $parent_id = $_POST['parent_id'];
      $data = [
        'user_id' => $user_id,
        'product_id' => $product_id,
        'comment_content' => $comment_content,
        'parent_id' => $parent_id
      ];
      $this->province->addComment($data);
      $response = new Response();
      $response->redirect('details/' . $product_id . '/' . $category_id . '');
    } elseif (isset($_POST['reply_comment_son'])) {
      $user_id = $_POST['user_id'];
      $product_id = $_POST['product_id'];
      $comment_content = $_POST['comment_content'];
      $parent_id = $_POST['parent_id'];
      $data = [
        'user_id' => $user_id,
        'product_id' => $product_id,
        'comment_content' => $comment_content,
        'parent_id' => $parent_id
      ];
      $this->province->addComment($data);
      $response = new Response();
      $response->redirect('details/' . $product_id . '/' . $category_id . '');
    } elseif (isset($_POST['edit_comment_father'])) {
      $comment_content_new = $_POST['comment_content_new'];
      $comment_id = $_POST['comment_id'];
      $data = [
        'comment_content' => $comment_content_new,
        'comment_id' => $comment_id
      ];
      $this->province->editCommentProduct($data, $comment_id);
      $response = new Response();
      $response->redirect('details/' . $product_id . '/' . $category_id . '');
    } elseif (isset($_POST['edit_comment_son'])) {
      $comment_content_new = $_POST['comment_content_new'];
      $comment_id = $_POST['comment_id'];
      $data = [
        'comment_content' => $comment_content_new,
        'comment_id' => $comment_id
      ];
      $this->province->editCommentProduct($data, $comment_id);
      $response = new Response();
      $response->redirect('details/' . $product_id . '/' . $category_id . '');
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
      $response->redirect('details/' . $product_id . '/' . $category_id . '');
    }
    $this->data['content'] = 'client/product/detail';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function product_category($category_id = 0, $per_pages = 8, $pages = 1)
  {
    $countProductCategory = $this->province->countProductCategory($category_id);
    $this->data['sub_content']['countProductCategory'] = $countProductCategory;
    $offset = ($pages - 1) * $per_pages;
    $totalPages = ceil($countProductCategory['countProductCategory'] / $per_pages);
    $this->data['sub_content']['totalPages'] = $totalPages;
    $this->data['sub_content']['per_pages'] = $per_pages;
    $this->data['sub_content']['pages'] = $pages;
    $this->data['sub_content']['category_id'] = $category_id;
    $getProductCategory = $this->province->getProductCategory($category_id, $per_pages, $offset);
    $this->data['sub_content']['getProductCategory'] = $getProductCategory;
    $title = 'Product Category';
    $this->data['pages_title'] = $title;
    $this->data['content'] = 'client/product/category';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
