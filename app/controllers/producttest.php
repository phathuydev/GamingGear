<?php
class ProductTest extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('ProductModel');
  }
  public function index()
  {
    echo 'Danh sách sản phẩm';
  }
  public function list()
  {
    $dataProduct = $this->province->getProductList();
    $title = 'Danh sách sản phẩm';
    $this->data['sub_content']['product_list'] = $dataProduct;
    $this->data['sub_content']['pages_title'] = [
      'Hi' => 'Hello'
    ];
    $this->data['pages_title'] = $title;
    $this->data['content'] = 'products/list';
    // Render view
    $this->render('layouts/client_layout', $this->data);
  }
  public function detail($id=0)
  {
    $product = $this->model('ProductModel');
    // Lấy dữ liệu
    $this->data['sub_content']['info'] = $product->getDetailProduct($id);
    $this->data['sub_content']['title'] = 'Chi tiết sản phẩm';
    $this->data['pages_title'] = 'Chi tiết sản phẩm';
    $this->data['content'] = 'Products/detail';
    // Show dữ liệu
    $this->render('layouts/client_layout', $this->data);
  }
}