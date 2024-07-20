<?php
class Auth extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('AuthModel');
  }
  public function index()
  {
    $title = 'Login';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['product'] = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $user_email = $_POST['user_email'];
      $user_entered_password = $_POST['user_password'];
      if (empty($user_email) || empty($user_entered_password)) {
        Session::flash('msg_lgClient', 'Please enter complete information');
      } else {
        $stored_user_data = $this->province->getUserLoginClient($user_email);
        if ($stored_user_data) {
          $stored_password = $stored_user_data['user_password'];
          if (password_verify($user_entered_password, $stored_password)) {
            Session::data('client_login', $stored_user_data['user_id']);
            $response = new Response();
            $response->redirect('home');
          }
        } else {
          Session::flash('msg_lgClient', 'Email or password is incorrect');
        }
      }
    }
    $this->data['sub_content']['msg_lgClient'] = Session::flash('msg_lgClient');
    $this->data['content'] = 'client/account/login';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function register()
  {
    $title = 'Register';
    $this->data['pages_title'] = $title;
    if (isset($_POST['register'])) {
      $user_email = $_POST['user_email'];
      $user_name = $_POST['user_name'];
      $user_password = $_POST['user_password'];
      $user_cpassword = $_POST['user_cpassword'];
      $passwordHash = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
      $checkEmailExist = $this->province->getUserLoginClient($user_email);
      if ($checkEmailExist) {
        Session::flash('msg_register', 'Account already exists');
      } elseif ($user_password !== $user_cpassword) {
        Session::flash('msg_register', 'The re-entered password does not match');
      } else {
        $data = [
          'user_name' => $user_name,
          'user_email' => $user_email,
          'user_password' => $passwordHash
        ];
        $this->model('UserModel')->insertUser($data);
        $response = new Response();
        $response->redirect('lgUser');
      }
    }
    $this->data['sub_content']['msg_register'] = Session::flash('msg_register');
    $this->data['content'] = 'client/account/register';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function forgot()
  {
    $title = 'Forgot';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['product'] = [];
    $this->data['content'] = 'client/account/forgot';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
  public function logout()
  {
    unset($_SESSION['cart']);
    unset($_SESSION['access_token']);
    Session::delete('client_login');
    Session::delete('google_login');
    $response = new Response();
    $response->redirect('lgUser');
  }
}
