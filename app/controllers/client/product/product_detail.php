<?php
class ProductDetail extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index($idProduct)
  {
    $title = 'Product Detail';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['product'] = [];
    $this->data['content'] = 'client/product/detail';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}