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
            $user_password = $_POST['user_password'];
            $getUser = $this->province->getUserLoginClient($user_email, $user_password);
            if ($getUser) {
                Session::data('client_login', $getUser['user_id']);
                $response = new Response();
                $response->redirect('home');
            } else {
                Session::flash('msg_lgClient', 'Email or password is incorrect');
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
        $this->data['sub_content']['product'] = [];
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
        Session::delete('client_login');
        $response = new Response();
        $response->redirect('lgUser');
    }
}
