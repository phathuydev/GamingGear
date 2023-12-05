<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class AuthModel extends Model
{
  private $__table = "users";

  function tableFill()
  {
    return 'users';
  }

  function fieldFill()
  {
    return '*';
  }
  public function getUserLoginAdmin($user_email)
  {
    $data = $this->db->table('users')->select('*')->where('user_email', '=', $user_email)->where('is_delete', '=', 0)->where('user_locked', '=', 0)->where('user_role', '=', 1)->first();
    if ($data) {
      return $data;
    }
  }
  public function getUserLoginClient($user_email)
  {
    $data = $this->db->table('users')
        ->select('*')
        ->where('user_email', '=', $user_email)
        ->where('is_delete', '=', 0)
        ->where('user_locked', '=', 0)
        ->first();
      return $data;
  }
}
