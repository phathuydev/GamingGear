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

  public function getVnp_SecureHash($vnp_SecureHash)
  {
    $data = $this->db->table('vnpay')
      ->where('vnp_SecureHash', '=', $vnp_SecureHash)
      ->first();
    return $data;
  }

  public function insertVnpay($data)
  {
    $this->db->table('vnpay')->insert($data);
  }

  public function updatePayment($data2, $code_orders)
  {
    $this->db->table('orders')
      ->where('code_orders', '=', $code_orders)
      ->update($data2);
  }
  public function insertOrderDetail($data)
  {
    $this->db->table('orders_detail')->insert($data);
  }
}
