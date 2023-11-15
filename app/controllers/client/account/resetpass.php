<?php
class Resetpass extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'Product List';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['product'] = [];
      $this->render('client/account/resetpass', $this->data);
  }
}