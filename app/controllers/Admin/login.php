<?php
class Login extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('AuthModel');
  }
  public function index()
  {
      $title = 'Login Admin';
      $this->data['sub_content']['pages_title'] = [];
      $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $user_email = $_POST['user_email'];
          $user_entered_password = $_POST['user_password'];
          $stored_user_data = $this->province->getUserLoginAdmin($user_email);
          if ($stored_user_data) {
              $stored_password = $stored_user_data['user_password'];
              if (password_verify($user_entered_password, $stored_password)) {
                  Session::data('admin_login', $stored_user_data['user_id']);
                  $response = new Response();
                  $response->redirect('gg-admin');
              } else {
                  Session::flash('msg', 'Email or password is incorrect');
              }
          } else {
              Session::flash('msg', 'Email or password is incorrect');
          }
      }
      $this->data['msg'] = Session::flash('msg');
    $this->render('admin/login', $this->data);
  }

    public function logout()
    {
        Session::delete('admin_login');
        $response = new Response();
        $response->redirect('lgAdmin');
    }
}
