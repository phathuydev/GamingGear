<?php
class Cart extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'Shopping Cart';
    $this->data['pages_title'] = $title;
    $this->data['sub_content']['product'] = [];
    $this->data['content'] = 'client/cart/cart';
    // $this->data['content'] = 'client/product/list';
    $this->render('client/layoutClient/client_layout', $this->data);
  }

    public function checkout()
    {
        $title = 'Product List';
        $this->data['pages_title'] = $title;
        $this->data['sub_content']['product'] = [];
        $this->data['css_checkout'] = _WEB_ROOT . '/public/assets/client/css/cart.css';
        $this->data['link_checkout_1'] = 'https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous"';
        $this->data['link_checkout_2'] = "https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'";
        $this->data['content'] = 'client/cart/checkout';
        // $this->data['content'] = 'client/product/list';
        $this->render('client/layoutClient/client_layout', $this->data);
    }

    public function thanks()
    {
        $title = 'Product List';
        $this->data['pages_title'] = $title;
        $this->data['sub_content']['product'] = [];
        $this->data['css_thanks'] = _WEB_ROOT . '/public/assets/client/css/cart.css';
        $this->data['content'] = 'client/cart/thanks';
        // $this->data['content'] = 'client/product/list';
        $this->render('client/layoutClient/client_layout', $this->data);
    }
}
