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

    // public function getList()
    // {
    //   $data = $this->db->query("SELECT * FROM $this->__table")->fetchAll(PDO::FETCH_ASSOC);
    //   return $data;
    // }

    // public function getDetail($id)
    // {
    //   $data = $this->db->query("SELECT * FROM $this->__table")->fetchAll(PDO::FETCH_ASSOC);
    //   return $data[$id];
    // }

    // public function getNameusers()
    // {
    // $data = $this->db->table('users')->select('users_id, users_name')->limit(3, 1)->orderBy('users_id', 'ASC')->get();
    // $data = $this->db->table('products')->join('users', 'products.users = users.id')->select('users.name as ten_danh_muc, products.product_name as ten_san_pham')->get();

    // return $data;
    // }

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
    // public function getAllUser()
    // {
    //   $data = $this->db->table('user')->select('*')->get();
    //   return $data;
    // }
    // public function getDetailusers($name)
    // {
    //   $data = $this->db->table('users')->where('users_id', '>', 0)->where('users_name', '=', $name)->select('users_id, users_name')->first();
    //   return $data;
    //   return $this->db->lastID()user_email;
    // }
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
