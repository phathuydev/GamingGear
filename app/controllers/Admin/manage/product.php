<?php
class Product extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'List Product';
      $this->data['sub_content']['pages_title'] = [];
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/product/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function product_add()
  {
    $title = 'Add Product';
      $this->data['sub_content']['pages_title'] = [];
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/product/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function product_edit()
  {
    $title = 'Edit Product';
      $this->data['sub_content']['pages_title'] = [];
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/product/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
