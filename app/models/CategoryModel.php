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
      $data = $this->db->table('categories')
          ->select('category_id, category_name, category_image_path, create_at, category_image')
          ->get();
      return $data;
  }

    public function countProductCategory()
    {
        $data = $this->db->table('categories')
            ->join('products', 'categories.category_id = products.category_id')
            ->select('products.category_id AS category_id, COUNT(products.category_id) AS count_category_products')
            ->groupBy('products.category_id')
            ->where('products.is_delete', '=', 0)
            ->get();
        return $data;
    }

    public function countPostCategory()
    {
        $data = $this->db->table('categories')
            ->join('posts', 'categories.category_id = posts.category_id')
            ->select('posts.category_id AS category_id, COUNT(posts.category_id) AS count_category_posts')
            ->groupBy('posts.category_id')
            ->where('posts.is_delete', '=', 0)
            ->get();
        return $data;
    }

    public function getNameCategory($name)
    {
        $data = $this->db->table('categories')
            ->select('category_name')
            ->where('category_name', '=', $name)
            ->first();
    return $data;
  }

    public function getFirstCategory($category_id)
    {
        $data = $this->db->table('categories')->where('category_id', '=', $category_id)->first();
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

    public function deleteBannerHome($category_id)
    {
        $this->db->table('categories')->where('category_id', '=', $category_id)->delete();
    }
}
