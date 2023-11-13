<?php
class Category extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'List Category';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/category/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function category_detail($id)
  {
    $title = 'Category Detail';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/category/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function category_add()
  {
    $title = 'Add Category';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/category/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function category_edit()
  {
    $title = 'Edit Category';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/category/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
