<?php
class Order extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('OrderModel');
  }
  public function index()
  {
      $listOrder = $this->province->getAllOrder();
      $this->data['sub_content']['listOrder'] = $listOrder;
    $title = 'List Order';
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/order/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function order_detail($order_id = 0)
  {
      $getOrderDetail = $this->province->getOrderDetail($order_id);
      $this->data['sub_content']['getOrderDetail'] = $getOrderDetail;
    $title = 'Order Detail';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/order/detail';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function order_edit($order_id = 0, $order_status = 0)
  {
      $getAllStatusOrder = $this->province->getAllStatusOrder();
      $this->data['sub_content']['getAllStatusOrder'] = $getAllStatusOrder;
      $this->data['sub_content']['order_status'] = $order_status;
    $title = 'Update Status';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/order/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
