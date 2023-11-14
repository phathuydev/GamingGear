<?php
class Profile extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index($idUser=0)
  {
    $title = 'Profile';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['profile'] = [];
    $this->data['content'] = 'client/profile/profile';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}