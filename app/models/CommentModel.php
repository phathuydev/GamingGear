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
    $data = $this->db->table('comments')
      ->join('posts', 'comments.post_id = posts.post_id')
      ->select('posts.post_id as post_id, posts.post_image_path AS 
      post_image_path, posts.post_image AS post_image, COUNT(comments.post_id) AS count_comment_post')
      ->where('comments.is_delete', '=', 0)
      ->groupBy('posts.post_id, posts.post_image_path, posts.post_image')
      ->get();
    return $data;
  }

  public function countCommentProductId($product_id)
  {
    $data = $this->db->table('comments')
      ->select('COUNT(comment_id) as countCommentProductId')
      ->where('is_delete', '=', 0)
      ->where('product_id', '=', $product_id)
      ->first();
    return $data;
  }

  public function countCommentProductReplyId($comment_id)
  {
    $data = $this->db->table('comments')
      ->select('COUNT(comment_id) as countCommentProductReplyId')
      ->where('is_delete', '=', 0)
      ->where('comment_id', '=', $comment_id)
      ->first();
    return $data;
  }

  public function countCommentPostReplyId($comment_id)
  {
    $data = $this->db->table('replies_post')
      ->select('COUNT(reply_post_id) as countCommentPostReplyId')
      ->where('is_delete', '=', 0)
      ->where('comment_id', '=', $comment_id)
      ->first();
    return $data;
  }

  public function getCommentProduct($product_id, $per_pages, $pages)
  {
    $data = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
      ->select('comments.product_id AS product_id, comments.comment_id AS comment_id, comments.user_id AS user_id, 
      comments.comment_content AS comment_content, comments.create_at AS create_at, comments.parent_id AS parent_id,
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS user_image_path, 
      users.user_image AS user_image')
      ->where('comments.product_id', '=', $product_id)
      ->limit($per_pages, $pages)
      ->where('comments.is_delete', '=', 0)
      ->orderBy('comments.create_at', 'DESC')
      ->get();
    return $data;
  }

  public function getCommentProductClient($product_id)
  {
    $data = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
      ->select('comments.product_id AS product_id, comments.comment_id AS comment_id, comments.user_id AS user_id, 
      comments.comment_content AS comment_content, comments.create_at AS create_at, comments.parent_id AS parent_id,
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
      ->where('comments.product_id', '=', $product_id)
      ->where('comments.is_delete', '=', 0)
      ->where('comments.parent_id', '=', 0)
      ->orderBy('comments.create_at', 'DESC')
      ->get();
    return $data;
  }

  // Sua tu replies product
  public function getReplyCommentProductClient($comment_id)
  {
    $data = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
      ->select('comments.product_id AS product_id, comments.comment_id AS comment_id, comments.user_id AS user_id, 
      comments.comment_content AS comment_content, comments.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
      ->where('comments.parent_id', '=', $comment_id)
      ->where('comments.is_delete', '=', 0)
      ->orderBy('comments.create_at', 'ASC')
      ->get();
    return $data;
  }

  // Sua tu replies product
  public function getReplyCommentPostClient($comment_id)
  {
    $data = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
      ->select('comments.product_id AS product_id, comments.product_id AS product_id, comments.comment_id AS comment_id, comments.user_id AS user_id, 
      comments.comment_content AS comment_content, comments.create_at AS create_at, 
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
      ->where('comments.parent_id', '=', $comment_id)
      ->where('comments.is_delete', '=', 0)
      ->orderBy('comments.create_at', 'ASC')
      ->get();
    return $data;
  }

  public function getCommentPost($post_id, $per_pages, $pages)
  {
    $data = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
      ->select('comments.post_id AS post_id, comments.comment_id AS comment_id, comments.user_id AS user_id, 
      comments.comment_content AS comment_content, comments.create_at AS create_at, comments.update_at AS update_at,
      comments.parent_id AS parent_id, users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
      ->where('comments.post_id', '=', $post_id)
      ->where('comments.is_delete', '=', 0)
      ->limit($per_pages, $pages)
      ->orderBy('comments.create_at', 'ASC')
      ->get();
    return $data;
  }

  public function getCommentPostClient($post_id)
  {
    $data = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
      ->select('comments.post_id AS post_id, comments.comment_id AS comment_id, comments.user_id AS user_id, 
      comments.comment_content AS comment_content, comments.create_at AS create_at, comments.update_at AS update_at, comments.parent_id AS parent_id,
      users.user_name AS user_name, users.user_email AS user_email, users.user_image_path AS 
      user_image_path, users.user_image AS user_image')
      ->where('comments.post_id', '=', $post_id)
      ->where('comments.is_delete', '=', 0)
      ->where('comments.parent_id', '=', 0)
      ->orderBy('comments.create_at', 'ASC')
      ->get();
    return $data;
  }

  public function countCommentPostId($post_id)
  {
    $data = $this->db->table('comments')
      ->select('COUNT(comment_id) as countCommentPostId')
      ->where('is_delete', '=', 0)
      ->where('post_id', '=', $post_id)
      ->first();
    return $data;
  }

  public function updateIsdeleteCommentProduct($data, $comment_id)
  {
    $this->db->table('comments')->where('comment_id', '=', $comment_id)->update($data);
  }

  public function updateIsdeleteCommentPost($data, $comment_id)
  {
    $this->db->table('comments')->where('comment_id', '=', $comment_id)->update($data);
  }

  public function updateIsdeleteReplyCommentProduct($data, $comment_id)
  {
    $this->db->table('comments')->where('comment_id', '=', $comment_id)->update($data);
  }
}
