<?php
// Kế thừa từ class Model
class HomeModel extends Model
{
  private $__table = "category";

  // Định nghĩa table trong Model
  function tableFill()
  {
    return 'category';
  }

  function fieldFill()
  {
    return 'category_name';
  }

  public function getList()
  {
    $data = $this->db->query("SELECT * FROM $this->__table")->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }

  public function getDetail($id)
  {
    $data = $this->db->query("SELECT * FROM $this->__table")->fetchAll(PDO::FETCH_ASSOC);
    return $data[$id];
  }

  public function getNameCategory()
  {
    // $data = $this->db->table('category')->select('category_id, category_name')->limit(3, 1)->orderBy('category_id', 'ASC')->get();
    // $data = $this->db->table('products')->join('category', 'products.category = category.id')->select('category.name as ten_danh_muc, products.product_name as ten_san_pham')->get();

    // return $data;
  }

  public function getAllCategory()
  {
    $data = $this->db->table('category')->select('*')->get();
    return $data;
  }
  public function getAllUser()
  {
    $data = $this->db->table('user')->select('*')->get();
    return $data;
  }
  public function getDetailCategory($name)
  {
    $data = $this->db->table('category')->where('category_id', '>', 0)->where('category_name', '=', $name)->select('category_id, category_name')->first();
    return $data;
  }

  public function insertCategory($data)
  {
    $this->db->table('category')->insert($data);
    return $this->db->lastID();
  }

  public function selectEmail($email){
      $this->db->table('user')->where('email', '=', $email)->get();
  }
}
