<?php
class Order extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'List Order';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/order/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function order_detail($id)
  {
    $title = 'Order Detail';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/order/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function order_edit()
  {
    $title = 'Update Status';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/order/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
