<?php
class Post extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'List Post';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/post/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function post_add()
  {
    $title = 'Add Post';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/post/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function post_edit()
  {
    $title = 'Edit Post';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/post/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
