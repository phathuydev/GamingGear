<?php

class postModel extends Model
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

    public function getAllPost()
    {
        $data = $this->db->table('posts')->select('*')->get();
        return $data;
    }

    public function getFirstpost($post_id)
    {
        $data = $this->db->table('posts')->where('is_delete', '=', '0')->where('post_id', '=', $post_id)->first();
        return $data;
    }

    public function insertpost($data)
    {
        $this->db->table('categories')->insert($data);
    }

    public function updatepost($data, $post_id)
    {
        $this->db->table('categories')->where('post_id', '=', $post_id)->update($data);
    }

    public function updateIsdelete($data, $post_id)
    {
        $this->db->table('categories')->where('post_id', '=', $post_id)->update($data);
    }
}
