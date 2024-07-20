<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class ProfileModel extends Model
{
  private $__table = "users";

  // Định nghĩa table trong Model
  function tableFill()
  {
    return 'users';
  }

  function fieldFill()
  {
    return '*';
  }
  public function getImageUser($user_id)
  {
    $data = $this->db->table('users')
      ->select('user_id, user_image, user_image_path')
      ->where('user_id', '=', $user_id)
      ->first();
    return $data;
  }
  public function updateProfile($data, $user_id)
  {
    $this->db->table('users')
      ->where('user_id', '=', $user_id)
      ->update($data);
  }
  public function updateAddressOrder($data, $order_id)
  {
    $this->db->table('orders')
      ->where('order_id', '=', $order_id)
      ->update($data);
  }
  public function updateAddressOrderDetail($data, $order_detail_id)
  {
    $this->db->table('orders_detail')
      ->where('order_detail_id', '=', $order_detail_id)
      ->update($data);
  }
}
