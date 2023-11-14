<?php
class Order extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index($idUser=0)
  {
    $title = 'Order History';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['order'] = [];
    $this->data['content'] = 'client/profile/order';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function orderfail($idUser=0)
  {
    $title = 'Order Fail';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['order'] = [];
    $this->data['content'] = 'client/profile/order';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}