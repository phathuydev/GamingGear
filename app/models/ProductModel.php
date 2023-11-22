<?php
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

    public function getAllProduct()
    {
        $data = $this->db->table('products')->where('is_delete', '=', '0')->get();
        return $data;
    }

    public function getAllProductEdit($product_id)
    {
        $data = $this->db->table('products')->where('is_delete', '=', '0')->where('product_id', '=', $product_id)->first();
        return $data;
    }

    public function getFirstProduct($product_id)
    {
        $data = $this->db->table('products')->select('product_id, product_name, product_image, product_image_path, product_price, product_price_reduce, product_quantity, product_category, product_special, product_describe, create_at, user_create')->where('product_id', '=', $product_id)->first();
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

    public function getProductCategory($category_id)
    {
        $data = $this->db->table('products')->select('*')->where('product_category', '=', $category_id)->where('is_delete', '=', '0')->get();
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
        $data = $this->db->table('products')->select('products.product_id as product_id, products.product_name as product_name, products.product_image as product_image, products.product_image_path as product_image_path, products.product_price as product_price, products.product_sale as product_sale, products.product_quantity as product_quantity,	
    products.product_category as product_category, products.product_view as product_view, products.product_describe as product_describe, products.is_delete as is_delete, categories.category_id as category_id, categories.category_name as category_name')->join('categories', 'products.product_category = categories.category_id')->where('product_id', '=', $product_id)->where('products.is_delete', '=', 0)->get();
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
