<?php
class ProductSearch extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index($keyWord)
  {
    $title = 'Product Search';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['product'] = [];
    $this->data['content'] = 'client/product/search';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}