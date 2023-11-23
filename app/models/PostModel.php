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

    public function addCommentPost($data)
    {
        $this->db->table('comments_post')->insert($data);
    }

    public function getAllPost()
    {
        $data = $this->db->table('posts')
            ->join('categories', 'posts.category_id = categories.category_id')
            ->join('posts_detail', 'posts.post_id = posts_detail.post_id')
            ->select('posts.post_id AS post_id, posts.post_image AS post_image, posts.post_image_path AS post_image_path, posts.create_at AS create_at,
    categories.category_name AS category_name, posts_detail.post_detail_id AS post_detail_id, posts_detail.post_detail_title AS post_detail_title, posts_detail.post_detail_image AS post_detail_image, 
    posts_detail.post_detail_image_path AS post_detail_image_path, posts_detail.post_detail_content AS post_detail_content')
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

    public function getPostDetail($post_id)
    {
        $data = $this->db->table('posts_detail')
            ->select('posts_detail.post_detail_title AS post_detail_title, posts_detail.post_detail_image AS post_detail_image, 
    posts_detail.post_detail_image_path AS post_detail_image_path, posts_detail.post_detail_content AS post_detail_content')
            ->where('posts_detail.post_id', '=', $post_id)
            ->first();
        return $data;
    }

    public function getPostEdit($post_id, $post_detail_id)
    {
        $data = $this->db->table('posts')
            ->join('posts_detail', 'posts.post_id = posts_detail.post_id')
            ->select('posts_detail.post_detail_title AS post_detail_title, posts_detail.post_detail_image AS post_detail_image, 
      posts_detail.post_detail_image_path AS post_detail_image_path, posts_detail.post_detail_content AS post_detail_content,
      posts.post_id AS post_id, posts.post_image AS post_image, posts.category_id AS category_id, 
      posts.post_image_path AS post_image_path')
            ->where('posts.post_id', '=', $post_id)
            ->where('posts_detail.post_detail_id', '=', $post_detail_id)
            ->get();
        return $data;
    }

    public function insertPost($data_section)
    {
        $this->db->table('posts')->insert($data_section);
        return $this->db->lastID();
    }

    public function insertPostDetail($data_content, $post_id)
    {
        $this->db->table('posts_detail')->insert($data_content, $post_id);
    }

    public function updatePost($data_section, $post_id)
    {
        $this->db->table('posts')->where('post_id', '=', $post_id)->update($data_section);
    }

    public function updatePostDetail($data_content, $post_detail_id)
    {
        $this->db->table('posts_detail')->where('post_detail_id', '=', $post_detail_id)->update($data_content);
    }

    public function updateIsDelete($data, $post_id, $post_detail_id)
    {
        $this->db->table('posts')->where('post_id', '=', $post_id)->update($data);
        $this->db->table('posts_detail')->where('post_detail_id', '=', $post_detail_id)->delete();
    }
}
