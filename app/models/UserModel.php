<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class UserModel extends Model
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
  public function getAlluser($per_pages, $pages)
  {
    $data = $this->db->table('users')
      ->select('user_id, user_name, user_email, user_phone, user_image, user_image_path, 
    user_address, user_locked, user_role, create_at, update_at, user_create, user_update, user_delete')
      ->where('is_delete', '=', '0')
      ->limit($per_pages, $pages)
      ->get();
    return $data;
  }
  public function getUserCreate($user_create)
  {
    $data = $this->db->table('users')
      ->select('user_id, user_name, user_email, user_create, user_update, user_delete')
      ->where('is_delete', '=', '0')
      ->where('user_id', '=', $user_create)
      ->first();
    return $data;
  }
  public function getUserUpdate($user_update)
  {
    $data = $this->db->table('users')
      ->select('user_id, user_name, user_email, user_create, user_update, user_delete')
      ->where('is_delete', '=', '0')
      ->where('user_id', '=', $user_update)
      ->first();
    return $data;
  }
  public function countUserId()
  {
    $data = $this->db->table('users')
      ->select('COUNT(user_id) as countUserId')
      ->where('is_delete', '=', 0)
      ->first();
    return $data;
  }
  public function getFirstUser($user_id)
  {
    $data = $this->db->table('users')->select('user_id, user_name, user_email, user_phone, user_image, user_image_path, user_address, user_role, user_locked, create_at, user_create')->where('user_id', '=', $user_id)->first();
    return $data;
  }
  public function getUserEmail($user_email)
  {
    $data = $this->db->table('users')->select('user_id, user_email')->where('user_email', '=', $user_email)->first();
    return $data;
  }
  public function getUserGoogle($user_id)
  {
    $data = $this->db->table('users')
      ->select('user_id, user_role, google_account')
      ->where('user_id', '=', $user_id)
      ->first();
    return $data;
  }
  public function getUserEmailGoogle($user_email)
  {
    $data = $this->db->table('users')
      ->select('user_id, user_email, user_locked')
      ->where('user_email', '=', $user_email)
      ->where('user_locked', '=', 0)
      ->where('google_account', '=', 1)
      ->first();
    return $data;
  }
  public function insertUser($data)
  {
    $this->db->table('users')->insert($data);
    return $this->db->lastID();
  }
  public function updateUser($data, $user_id)
  {
    $this->db->table('users')->where('user_id', '=', $user_id)->update($data);
  }
  public function updateIsdelete($data, $user_id)
  {
    $this->db->table('users')->where('user_id', '=', $user_id)->update($data);
  }
}
