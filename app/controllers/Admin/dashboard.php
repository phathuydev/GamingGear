<?php
class Dashboard extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    if (empty(Session::data('admin_login'))) {
      $response = new Response();
      $response->redirect('lgAdmin');
    }
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'Dashboard';
    $this->data['sub_content']['pages_title'] = [];
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/dashboard';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
