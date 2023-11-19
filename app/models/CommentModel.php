<?php

// Kế thừa từ clASs Model
class CommentModel extends Model
{
    private $__table = "comments_product";

    function tableFill()
    {
        return 'comments_product';
    }

    function fieldFill()
    {
        return '*';
    }

    public function getCommentProduct()
    {
        $data = $this->db->table('comments_product')->join('products', 'comments_product.product_id = products.product_id')->select('products.product_name AS product_name, products.product_image AS product_image, products.product_image_path AS product_image_path, products.product_id AS product_id, COUNT(comments_product.product_id) AS count_id_product')->groupBy('products.product_name, products.product_image, products.product_image_path, products.product_id')->get();
        return $data;
    }
}
