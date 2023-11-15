<?php

class Product_category extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index($idCategory=0)
  {
    $title = 'Product Category';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['product'] = [];
    $this->data['content'] = 'client/product/category';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}