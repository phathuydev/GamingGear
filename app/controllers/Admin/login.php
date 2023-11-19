<?php
class Login extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('AuthModel');
  }
  public function index()
  {
      $title = 'Login Admin';
      $this->data['sub_content']['pages_title'] = [];
      $this->data['pages_title'] = $title;
    $this->render('admin/login', $this->data);
  }
}
