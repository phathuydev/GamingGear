<?php
class AuthMiddleware extends Middlewares{
  public function handle() {
    // $data = $this->db->table('user')->get();
    // $homeModel = Load::model('HomeModel');
    // $data = $homeModel->getAllUser();
    if (Session::data('admin_login')==null){
      $response = new Response();
      // $response->redirect('gg-login');
    }
  }
}