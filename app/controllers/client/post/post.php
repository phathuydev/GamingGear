<?php
class Post extends Controller
{
    public $province;
    public $data = [];

    public function __construct()
    {
        $this->province = $this->model('PostModel');
    }

    public function index($per_pages = 8, $pages = 1)
    {
        $countProductId = $this->model('ProductModel')->countProductId();
        $this->data['sub_content']['countProductId'] = $countProductId;
        $offset = ($pages - 1) * $per_pages;
        $totalPages = ceil($countProductId['countProductId'] / $per_pages);
        $this->data['sub_content']['totalPages'] = $totalPages;
        $this->data['sub_content']['per_pages'] = $per_pages;
        $this->data['sub_content']['pages'] = $pages;
        $listPost = $this->province->getAllPost($per_pages, $offset);
        $this->data['sub_content']['listPost'] = $listPost;
        $title = 'Post List';
        $this->data['pages_title'] = $title;
        $this->data['css_post'] = _WEB_ROOT . '/public/assets/client/css/post.css';
        $this->data['sub_content']['post'] = [];
        $this->data['content'] = 'client/post/list';
        $this->render('client/layoutClient/client_layout', $this->data);
    }

    public function post_detail($post_id)
    {
        $getPostDetail = $this->province->getPostDetail($post_id);
        $this->data['sub_content']['getPostDetail'] = $getPostDetail;
        $this->data['sub_content']['post_id'] = $post_id;
        $title = 'Post Detail';
        $this->data['pages_title'] = $title;
        $this->data['content'] = 'client/post/detail';
        $this->render('client/layoutClient/client_layout', $this->data);
    }
}
