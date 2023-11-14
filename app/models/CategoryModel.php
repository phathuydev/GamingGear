<?php

class CategoryModel extends Model
{

  private $__table = "product";

  // Định nghĩa table trong Model
  function tableFill()
  {
    return 'category';
  }

  function fieldFill()
  {
    return 'category_name';
  }

  public function getAllCategory()
  {
    $data = $this->db->table('category')->select('*')->get();
    return $data;
  }
}
