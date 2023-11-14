<?php
class Login extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('LoginModel');
  }
  public function index()
  {
    $request = new Request();
    if ($request->isPost()) {
      $request->rules([
        'email' => 'required|email',
        'password' => 'required'
      ]);
      //Set message
      $request->message([
        'email.required' => 'Email không để trống!',
        'email.email' => 'Email sai định dạng!',
        'password.required' => 'Mật khẩu không để trống!'
      ]);

      $validate = $request->validate();
      if (!$validate) {
        Session::flash('msg', 'Tài khoản không tồn tại!');
      }
    }
    $response = new Response();
    $response->redirect('lgAdmin/get_login');
  }

  public function get_login()
  {
    $this->data['msg'] = Session::flash('msg');
    $this->render('admin/login', $this->data);
  }
}
