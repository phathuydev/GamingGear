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
        $data = $this->db->table('products')->where('is_delete', '=', '0')->get();
        return $data;
    }

    public function getProductCategory($category_id)
    {
        $data = $this->db->table('products')->select('*')->where('product_category', '=', $category_id)->where('is_delete', '=', '0')->get();
        return $data;
    }

    public function getProductDetail($product_id)
    {
        $data = $this->db->table('products')->select('products.product_id as product_id, products.product_name as product_name, products.product_image as product_image, products.product_image_path as product_image_path, products.product_price as product_price, products.product_price_reduce as product_price_reduce, products.product_quantity as product_quantity,	
    products.product_category as product_category, products.product_describe as product_describe, products.is_delete as is_delete, categories.category_id as category_id, categories.category_name as category_name')->join('categories', 'products.product_category = categories.category_id')->where('product_id', '=', $product_id)->where('products.is_delete', '=', 0)->get();
        return $data;
    }
    // public function getAllProduct()
    // {
    //   $data = $this->db->table('user')->select('*')->get();
    //   return $data;
    // }

    // public function getDetailProduct($id)
    // {
    //   $data = [
    //     'Sản phẩm 1',
    //     'Sản phẩm 2',
    //     'Sản phẩm 3'
    //   ];
    //   return $data[$id];
    // }
}
