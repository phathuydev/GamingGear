<?php
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

    public function getAlluser()
    {
        $data = $this->db->table('users')->select('user_id, user_name, user_email, user_phone, user_image, user_image_path, user_address, user_locked, user_role, create_at, update_at, user_create, user_update, user_delete')->where('is_delete', '=', '0')->get();
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

    public function insertUser($data)
    {
        $this->db->table('users')->insert($data);
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
