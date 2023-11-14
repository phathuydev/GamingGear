<?php
class Home extends Controller
{

  public $province, $data = [];
  public function __construct()
  {
    $this->province = $this->model('HomeModel');
  }
  public function index()
  {
    $title = 'Home List';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['role'] = [];
    $this->data['content'] = 'client/home/home';
    $this->render('client/layoutClient/client_layout', $this->data);
  }

  public function get_user()
  {
    $this->data['msg'] = Session::flash('msg');
    $this->render('users/add', $this->data);
  }
  public function post_user()
  {
    $request = new Request();
    if ($request->isPost()) {
      $request->rules([
        'name' => 'required|min:5|max:20',
        'email' => 'required|email|unique:user:email:user_id=' . 1,
        'age' => 'required|callback_check_age',
        'password' => 'required|min:3',
        'cpassword' => 'required|match:password'
      ]);

      //Set message
      $request->message([
        'name.required' => 'Họ tên không để trống!',
        'name.min' => 'Họ tên phải lớn hơn 5 ký tự!',
        'name.max' => 'Họ tên không quá 20 ký tự!',
        'email.required' => 'Email không để trống!',
        'email.email' => 'Email sai định dạng!',
        'email.unique' => 'Email đã tồn tại!',
        'age.required' => 'Tuổi không để trống!',
        'age.callback_check_age' => 'Tuổi không được nhỏ hơn 20!',
        'password.required' => 'Mật khẩu không để trống!',
        'password.min' => 'Mật khẩu quá ngắn!',
        'cpassword.required' => 'Hãy nhập lại mật khẩu!',
        'cpassword.match' => 'Mật khẩu không khớp!'
      ]);

      $validate = $request->validate();
      if (!$validate) {
        Session::flash('msg', 'Đã có lỗi xảy ra, vui lòng kiểm tra lại!');
      }
    }
    $response = new Response();
    $response->redirect('home/get_user');
  }

  public function check_age($age)
  {
    if ($age >= 20) return true;
    return false;
  }
}
