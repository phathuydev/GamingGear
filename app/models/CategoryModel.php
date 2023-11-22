<?php

class CategoryModel extends Model
{

    private $__table = "categories";

  // Định nghĩa table trong Model
  function tableFill()
  {
      return 'categories';
  }

  function fieldFill()
  {
      return '*';
  }

  public function getAllCategory()
  {
      $data = $this->db->table('categories')->where('is_delete', '=', '0')->select('*')->get();
    return $data;
  }

    public function getFirstCategory($category_id)
    {
        $data = $this->db->table('categories')->where('is_delete', '=', '0')->where('category_id', '=', $category_id)->first();
        return $data;
    }

    public function insertCategory($data)
    {
        $this->db->table('categories')->insert($data);
    }

    public function updateCategory($data, $category_id)
    {
        $this->db->table('categories')->where('category_id', '=', $category_id)->update($data);
    }

    public function updateIsdelete($data, $category_id)
    {
        $this->db->table('categories')->where('category_id', '=', $category_id)->update($data);
    }
}
