<?php
class PostDetail extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function category($idPost)
  {
    $title = 'Post Detail';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['post'] = [];
    $this->data['content'] = 'client/post/detail';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
