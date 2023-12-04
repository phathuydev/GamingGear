<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ clASs Model
class CommentModel extends Model
{
  private $__table = "comments";

  function tableFill()
  {
    return 'comments';
  }

  function fieldFill()
  {
    return '*';
  }
  public function getAllCommentProduct()
  {
    $data = $this->db->table('comments')
      ->join('products', 'comments.product_id = products.product_id')
      ->select('products.product_id as product_id, products.product_name AS product_name, products.product_image_path AS 
      product_image_path, products.product_image AS product_image, COUNT(comments.product_id) AS count_comment_product')
      ->where('comments.is_delete', '=', 0)
      ->groupBy('products.product_id, products.product_name, products.product_image_path, products.product_image')
      ->get();
    return $data;
  }
  public function getAllCommentPost()
  {
      $data = $this->db->table('comments_post')
          ->join('posts', 'comments_post.post_id = posts.post_id')
      ->select('posts.post_id as post_id, posts.post_image_path AS 
      post_image_path, posts.post_image AS post_image, COUNT(comments_post.post_id) AS count_comment_post')
          ->where('comments_post.is_delete', '=', 0)
      ->groupBy('posts.post_id, posts.post_image_path, posts.post_image')
      ->get();
    return $data;
  }

    public function getCommentProduct($product_id)
  {
    $data = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
        ->select('comments.product_id AS product_id, comments.comment_product_id AS comment_product_id, comments.user_id AS user_id, 
      comments.comment_content AS comment_content, comments.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
        ->where('comments.product_id', '=', $product_id)
      ->where('comments.is_delete', '=', 0)
        ->orderBy('comments.create_at', 'DESC')
      ->get();
    return $data;
  }

    public function getReplyCommentProduct($comment_product_id)
  {
      $data = $this->db->table('replies_product')
          ->join('users', 'replies_product.user_id = users.user_id')
          ->select('replies_product.reply_product_id AS reply_product_id, replies_product.comment_product_id AS comment_product_id, 
      replies_product.user_id AS user_id, replies_product.comment_content AS comment_content, replies_product.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
          ->where('replies_product.comment_product_id', '=', $comment_product_id)
          ->where('replies_product.is_delete', '=', 0)
          ->orderBy('replies_product.create_at', 'DESC')
      ->get();
    return $data;
  }

    public function getCommentPost($post_id)
  {
      $data = $this->db->table('comments_post')
          ->join('users', 'comments_post.user_id = users.user_id')
          ->select('comments_post.post_id AS post_id, comments_post.comment_post_id AS comment_post_id, comments_post.user_id AS user_id, 
      comments_post.comment_content AS comment_content, comments_post.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
          ->where('comments_post.post_id', '=', $post_id)
          ->where('comments_post.is_delete', '=', 0)
          ->orderBy('comments_post.create_at', 'DESC')
      ->get();
    return $data;
  }

    public function getReplyCommentPost($comment_post_id)
  {
      $data = $this->db->table('replies_post')
          ->join('users', 'replies_post.user_id = users.user_id')
          ->select('replies_post.reply_post_id AS reply_post_id, replies_post.comment_post_id AS comment_post_id, 
      replies_post.user_id AS user_id, replies_post.comment_content AS comment_content, replies_post.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
          ->where('replies_post.comment_post_id', '=', $comment_post_id)
          ->where('replies_post.is_delete', '=', 0)
          ->orderBy('replies_post.create_at', 'DESC')
      ->get();
    return $data;
  }

    public function addCommentProduct($data)
    {
        $this->db->table('comments')->insert($data);
    }

    public function updateIsdeleteCommentProduct($data, $comment_product_id)
    {
        $this->db->table('comments')->where('comment_product_id', '=', $comment_product_id)->update($data);
    }

    public function updateIsdeleteReplyCommentProduct($data, $reply_product_id)
  {
      $this->db->table('replies_product')->where('reply_product_id', '=', $reply_product_id)->update($data);
  }

    public function updateIsdeleteCommentPost($data, $comment_post_id)
    {
        $this->db->table('comments_post')->where('comment_post_id', '=', $comment_post_id)->update($data);
  }

    public function updateIsdeleteReplyCommentPost($data, $reply_post_id)
  {
      $this->db->table('replies_post')->where('reply_post_id', '=', $reply_post_id)->update($data);
  }
}
