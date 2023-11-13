<?php
class User extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  
  public function index()
  {
    $title = 'List User';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/user/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function user_add()
  {
    $title = 'Add User';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/user/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function user_edit()
  {
    $title = 'Update Status';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/user/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
