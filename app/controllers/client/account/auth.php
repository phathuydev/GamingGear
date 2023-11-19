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
        $title = 'Product List';
        $this->data['pages_title'] = $title;
        $this->data['sub_content']['product'] = [];
        $this->data['content'] = 'client/account/login';
        $this->render('client/layoutClient/client_layout', $this->data);
    }

    public function register()
    {
        $title = 'Product List';
        $this->data['pages_title'] = $title;
        $this->data['sub_content']['product'] = [];
        $this->data['content'] = 'client/account/register';
        $this->render('client/layoutClient/client_layout', $this->data);
    }

    public function forgot()
    {
        $title = 'Product List';
        $this->data['pages_title'] = $title;
        $this->data['sub_content']['product'] = [];
        $this->data['content'] = 'client/account/forgot';
        $this->render('client/layoutClient/client_layout', $this->data);
    }

    public function logout()
    {
        $title = 'Product List';
        $this->data['pages_title'] = $title;
        $this->data['sub_content']['product'] = [];
        $this->data['content'] = 'client/account/logout';
        $this->render('client/layoutClient/client_layout', $this->data);
    }
}