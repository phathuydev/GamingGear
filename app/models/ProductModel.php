<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class ProductModel extends Model
{
  private $__table = "products";

  function tableFill()
  {
    return 'products';
  }

  function fieldFill()
  {
    return '*';
  }

  public function getAllProduct($per_pages, $pages)
  {
    $data = $this->db->table('products')
      ->join('categories', 'products.category_id = categories.category_id')
      ->select('products.product_id AS product_id, products.product_name AS product_name, products.product_image AS product_image, products.product_image_path AS product_image_path, products.product_price AS product_price,
     products.product_price_reduce AS product_price_reduce, products.product_quantity AS product_quantity, products.update_at as update_at, products.is_delete as is_delete, 
     products.category_id AS category_id, products.product_special AS product_special, products.product_describe AS product_describe, products.user_create as user_create, products.user_update as user_update,
     products.create_at AS create_at, categories.category_id AS category_id, categories.category_name AS category_name')
      ->limit($per_pages, $pages)
      ->get();
    return $data;
  }
  public function countProductId()
  {
    $data = $this->db->table('products')
      ->select('COUNT(product_id) as countProductId')
      ->where('is_delete', '=', 0)
      ->first();
    return $data;
  }
  public function countProductCategory($category_id)
  {
    $data = $this->db->table('products')
      ->select('COUNT(product_id) as countProductCategory')
      ->where('category_id', '=', $category_id)
      ->where('is_delete', '=', 0)
      ->first();
    return $data;
  }

    public function countProductSearch($searchKeyword)
    {
        $data = $this->db->table('products')
            ->select('COUNT(product_id) as countProductSearch')
            ->whereLike('product_name', '%' . $searchKeyword . '%')
            ->where('is_delete', '=', 0)
            ->first();
        return $data;
    }
  public function getBannerProductId($product_id)
  {
    $data = $this->db->table('banners_product')
      ->select('banner_product_image, banner_product_path')
      ->where('product_id', '=', $product_id)
      ->get();
    return $data;
  }
  public function getFirstProduct($product_id)
  {
    $data = $this->db->table('products')->select('*')->where('is_delete', '=', '0')->where('product_id', '=', $product_id)->first();
    return $data;
  }

    public function getProductSearch($searchKeyword, $per_pages, $pages)
    {
        $data = $this->db->table('products')
            ->join('categories', 'products.category_id = categories.category_id')
            ->select('products.product_id AS product_id, products.product_name AS product_name, products.product_image AS product_image, products.product_image_path AS product_image_path, products.product_price AS product_price,
      products.product_price_reduce AS product_price_reduce, products.product_quantity AS product_quantity, 
      products.category_id AS category_id, products.product_special AS product_special, products.product_describe AS product_describe, 
      products.create_at AS create_at, categories.category_id AS category_id, categories.category_name AS category_name')
            ->where('products.is_delete', '=', '0')
            ->whereLike('product_name', '%' . $searchKeyword . '%')
            ->limit($per_pages, $pages)
            ->get();
        return $data;
  }
  public function insertProduct($data)
  {
    $this->db->table('products')->insert($data);
  }
  public function updateIsDelete($data, $product_id)
  {
    $this->db->table('products')->where('product_id', '=', $product_id)->update($data);
  }
  public function updateProduct($data, $product_id)
  {
    $this->db->table('products')->where('product_id', '=', $product_id)->update($data);
  }
  public function addComment($data)
  {
    $this->db->table('comments')
        ->insert($data);
  }
  public function updateIsdeleteCommentProduct($data, $comment_id)
  {
    $this->db->table('comments')
        ->where('comment_id', '=', $comment_id)
        ->update($data);
  }
  public function editCommentProduct($data, $comment_id)
  {
    $this->db->table('comments')
        ->where('comment_id', '=', $comment_id)
        ->update($data);
  }
  public function getProductCategory($category_id, $per_pages, $pages)
  {
    $data = $this->db->table('products')
        ->select('*')
        ->where('category_id', '=', $category_id)
        ->where('is_delete', '=', '0')
        ->limit($per_pages, $pages)
        ->get();
    return $data;
  }
  public function getAllCategory()
  {
    $data = $this->db->table('categories')
      ->select('*')
      ->get();
    return $data;
  }
  public function getProductDetail($product_id)
  {
    $data = $this->db->table('products')
        ->join('categories', 'products.category_id = categories.category_id')
        ->select('products.product_id as product_id, products.product_name as product_name, 
    products.product_image as product_image, products.product_image_path as product_image_path, 
    products.product_price as product_price, products.product_price_reduce as product_price_reduce, 
    products.product_quantity as product_quantity, products.category_id as category_id, 
    products.product_describe as product_describe, products.is_delete as is_delete, 
    categories.category_id as category_id, categories.category_name as category_name')
        ->where('product_id', '=', $product_id)
        ->where('products.is_delete', '=', 0)
        ->get();
    return $data;
  }
}
