<?php
class Order extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    if (empty(Session::data('admin_login'))) {
      $response = new Response();
      $response->redirect('lgAdmin');
    }
    $this->province = $this->model('OrderModel');
  }
  public function list($per_pages, $pages)
  {
    $countOrderId = $this->province->countOrderId();
    $this->data['sub_content']['countOrderId'] = $countOrderId;
    $offset = ($pages - 1) * $per_pages;
    $totalPages = ceil($countOrderId['countOrderId'] / $per_pages);
    $this->data['sub_content']['totalPages'] = $totalPages;
    $this->data['sub_content']['per_pages'] = $per_pages;
    $this->data['sub_content']['pages'] = $pages;
    $listOrder = $this->province->getAllOrder($per_pages, $offset);
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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $order_status = $_POST['order_status'];
      $data = [
        'order_status' => $order_status,
        'update_at' => date("Y-m-d H:i:s")
      ];
      $this->province->updateOrder($data, $order_id);
      $response = new Response();
      $response->redirect('admin/manage/order/list/8/1');
    }
    $title = 'Update Status';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/order/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
