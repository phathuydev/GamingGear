<?php
class Post extends Controller {
    public function index() {
        echo 'Tất cả bài viết';
    }
  public function category($id) {
    echo 'Bài viết số - '.$id.'';
  }
}