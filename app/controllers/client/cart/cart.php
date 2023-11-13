<?php
class Cart extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'Shopping Cart';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['product'] = [];
    $this->data['content'] = 'client/cart/cart';
    // $this->data['content'] = 'client/product/list';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}