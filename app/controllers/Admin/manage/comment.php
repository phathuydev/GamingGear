<?php
class Comment extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'List Comment';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/comment/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function comment_detail($id)
  {
    $title = 'Comment Detail';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/comment/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
