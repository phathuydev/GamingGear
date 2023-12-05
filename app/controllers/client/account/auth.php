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
          } else {
              Session::flash('msg_lgClient', 'Email or password is incorrect');
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
      //Quên mật khẩu user
      if (isset($_POST['forgotPassword'])) {
          $user_email = $_POST['user_email'];
          $resetpass_HashSecret = "OQJSUFBVHCYDJFOEJFGSLOWGYWBEYGB";
          $hash = hash_hmac('sha256', $user_email, $resetpass_HashSecret);
          $_SESSION['hashEmail'] = $hash;
          $select = $this->province->getUserLoginClient($user_email);
          if (empty($user_email)) {
              Session::flash('err_user_email', 'Please fill in your email!');
          } elseif ($select) {
              $_SESSION['resetPass'] = $select['user_id'];
              $_SESSION['user_email'] = $user_email;
              $mess = '<div><p><b>Hello!</b></p>
        <p>You just received a request to change your password from this email, please click on the link below to change your password!.</p><br>
        <p><button style="background-color: #0000000; color: #fff;"><a href="http://gaminggear.vn/app/views/client/account/resetpass.php">
        Click here</a></button></p><br>
        <p>If you did not request a password reset, no further action is required.</p></div>';

              require './app/core/PHPMailer-master/src/Exception.php';
              require './app/core/PHPMailer-master/src/PHPMailer.php';
              require './app/core/PHPMailer-master/src/SMTP.php';

              $email = $user_email;
              $mail = new PHPMailer\PHPMailer\PHPMailer();
              $mail->IsSMTP();
              $mail->SMTPAuth = true;
              $mail->SMTPSecure = "tls";
              $mail->Host = "smtp.gmail.com";
              $mail->Port = "587";
              $mail->Username = "huylppc05334@fpt.edu.vn";
              $mail->Password = "lenl ztdz evcs foia";
              $mail->FromName = "Reset Password";
              $mail->addAddress($email);
              $mail->Subject = "Reset Password User " . $user_email . "";
              $mail->isHTML(TRUE);
              $mail->Body = $mess;
              if (!$mail->send()) {
                  exit();
              } else {
                  Session::flash('err_user_email_success', 'Link to reset password has been sent to your email!');
              }
          } else {
              Session::flash('err_user_email', 'The email you just entered does not exist!');
          }
      };
      $this->data['sub_content']['err_user_email'] = Session::flash('err_user_email');
      $this->data['sub_content']['err_user_email_success'] = Session::flash('err_user_email_success');
      $this->data['sub_content']['resetPass'] = Session::data('resetPass');
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
