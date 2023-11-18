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
        $title = 'Product Detail';
        $this->data['pages_title'] = $title;
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
