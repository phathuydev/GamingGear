<?php
class Contact extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'Contact';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['contact'] = [];
    $this->data['content'] = 'client/contact/contact';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}