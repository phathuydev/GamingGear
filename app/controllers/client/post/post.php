<?php
class Post extends Controller
{
    public $province;
    public $data = [];

    public function __construct()
    {
        $this->province = $this->model('');
    }

    public function index()
    {
        $title = 'Post List';
        $this->data['pages_title'] = $title;
        $this->data['css_post'] = _WEB_ROOT . '/public/assets/client/css/post.css';
        $this->data['sub_content']['post'] = [];
        $this->data['content'] = 'client/post/list';
        $this->render('client/layoutClient/client_layout', $this->data);
    }
}
