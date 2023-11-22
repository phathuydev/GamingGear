<?php
class Product extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('ProductModel');
  }
  public function index()
  {
      $getAllProduct = $this->province->getAllProduct();
    $title = 'Product List';
    $this->data['pages_title'] = $title;
      $this->data['sub_content']['getAllProduct'] = $getAllProduct;
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

    public function product_detail($product_id = 0, $category_id = 0)
    {
        $getProductDetail = $this->province->getProductDetail($product_id);
        $this->data['sub_content']['getProductDetail'] = $getProductDetail;
        $getProductCategory = $this->province->getProductCategory($category_id);
        $this->data['sub_content']['getProductCategory'] = $getProductCategory;
        $getComment = $this->model('CommentModel')->getCommentProduct($product_id);
        $this->data['sub_content']['getComment'] = $getComment;
        $getReplyComment = $this->model('CommentModel')->getReplyCommentProduct($product_id);
        $this->data['sub_content']['getReplyComment'] = $getReplyComment;
        $countCommentProduct = $this->model('CommentModel')->countCommentProduct($product_id);
        $this->data['sub_content']['countCommentProduct'] = $countCommentProduct;
        $this->data['sub_content']['client_login'] = Session::data('client_login');
        $title = 'Product Detail';
        $this->data['pages_title'] = $title;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $parent_id = $_POST['parent_id'];
            $comment_content = $_POST['comment_content'];
            $data = [
                'parent_id' => $parent_id,
                'product_id' => $product_id,
                'user_id' => Session::data('client_login'),
                'comment_content' => $comment_content,
            ];
            $this->province->addCommentProduct($data);
        }
        $this->data['content'] = 'client/product/detail';
        $this->render('client/layoutClient/client_layout', $this->data);
    }

    public function product_category($category_id = 0)
    {
        $getProductCategory = $this->province->getProductCategory($category_id);
        $this->data['sub_content']['getProductCategory'] = $getProductCategory;
        $title = 'Product Category';
        $this->data['pages_title'] = $title;
        $this->data['content'] = 'client/product/category';
        $this->render('client/layoutClient/client_layout', $this->data);
  }
}
