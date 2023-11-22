<?php
// Kế thừa từ clASs Model
class PostModel extends Model
{
    private $__table = "posts";

    function tableFill()
    {
        return 'posts';
    }

    function fieldFill()
    {
        return '*';
    }

    public function getAllCommentPost()
    {
        $data = $this->db->table('comments_product')
            ->join('users', 'comments_product.user_id = users.user_id')
            ->join('products', 'comments_product.product_id = products.product_id')
            ->select('comments_product.comment_product_id AS comment_product_id, comments_product.user_id AS user_id, 
      comments_product.comment_content AS comment_content, comments_product.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image, products.product_name AS product_name, products.product_image_path AS 
      product_image_path, products.product_image AS product_image')
            ->where('comments_product.is_delete', '=', 0)
            ->orderBy('comments_product.create_at', 'DESC')
            ->get();
        return $data;
    }

    public function getCommentProduct($product_id)
    {
        $data = $this->db->table('comments_product')
            ->join('users', 'comments_product.user_id = users.user_id')
            ->select('comments_product.comment_product_id AS comment_product_id, comments_product.user_id AS user_id, 
      comments_product.comment_content AS comment_content, comments_product.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
            ->where('comments_product.product_id', '=', $product_id)
            ->where('comments_product.is_delete', '=', 0)
            ->orderBy('comments_product.create_at', 'DESC')
            ->get();
        return $data;
    }

    public function getReplyCommentProduct($comment_product_id)
    {
        $data = $this->db->table('replies_product')
            ->join('users', 'replies_product.user_id = users.user_id')
            ->select('replies_product.comment_product_id AS comment_product_id, replies_product.user_id AS user_id,
      replies_product.comment_content AS comment_content, replies_product.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
            ->where('replies_product.comment_product_id', '=', $comment_product_id)
            ->where('replies_product.is_delete', '=', 0)
            ->orderBy('replies_product.create_at', 'DESC')
            ->get();
        return $data;
    }

    public function countCommentProduct($product_id)
    {
        $data = $this->db->table('comments_product')->select('COUNT(comment_product_id) AS total_comment')->where('product_id', '=', $product_id)->first();
        return $data['total_comment'];
    }

    public function addCommentProduct($data)
    {
        $this->db->table('comments_product')->insert($data);
    }
    // public function getCommentProduct()
    // {
    //   $data = $this->db->table('comments_product')->join('products', 'comments_product.product_id = products.product_id')->join('users', 'comments_product.user_id = users.user_id')->select('products.product_name AS product_name, products.product_image AS product_image, products.product_image_path AS product_image_path, users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS user_image_path, users.user_image AS user_image, comments_product.product_id AS product_id, comments_product.comment_product_id AS comment_product_id, comments_product.create_at AS create_at')->where('comments_product.is_delete', '=', 0)->get();
    //   return $data;
    // }
    // public function getCommentProductDetail($comment_product_id)
    // {
    //   $data = $this->db->table('comments_product_detail')->select('*')->where('id_comment', '=', $comment_product_id)->get();
    //   return $data;
    // }
    //  public function getCommentPost()
    // {
    //   $data = $this->db->table('comments_post')->join('posts', 'comments_post.post_id = posts.post_id')->select('posts.post_title AS post_title, posts.post_image AS post_image, posts.post_image_path AS post_image_path, comments_post.post_id AS post_id, COUNT(comments_post.post_id) AS count_id_post')->groupBy('posts.post_title, posts.post_image, posts.post_image_path, posts.post_id')->get();
    //   return $data;
    // }
    // public function getCommentPostDetail($comment_post_id)
    // {
    //   $data = $this->db->table('comments_post_detail')->join('users', 'comments_post_detail.user_id = users.user_id')->select('users.user_name AS user_name, users.user_email AS user_email, users.user_image AS user_image, users.user_image_path AS user_image_path, comments_post_detail.id_comment AS id_comment, comments_post_detail.comments_post_content AS comments_post_content')->where('id_post', '=', $comment_post_id)->get();
    //   return $data;
    // }
    public function getAllPost()
    {
        $data = $this->db->table('posts')->select('*')->get();
        return $data;
    }
}
