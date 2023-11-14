<?php
// Kế thừa từ class Model
class ProductModel extends Model
{
  private $__table = "user";

  function tableFill()
  {
    return 'user';
  }

  function fieldFill()
  {
    return '*';
  }
  public function getAllProduct()
  {
    $data = $this->db->table('user')->select('*')->get();
    return $data;
  }
}
