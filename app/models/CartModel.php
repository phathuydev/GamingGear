<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
class CartModel extends Model
{

  private $__table = "orders";

  // Định nghĩa table trong Model
  function tableFill()
  {
    return 'orders';
  }

  function fieldFill()
  {
    return '*';
  }
  public function insertOrders($data)
  {
    $this->db->table('orders')->insert($data);
    return $this->db->lastID();
  }
  public function insertOrderDetail($data)
  {
    $this->db->table('orders_detail')->insert($data);
  }
}
