<?php
class Profile extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    if (empty(Session::data('google_login')) && empty(Session::data('client_login'))) {
      $response = new Response();
      $response->redirect('home');
    }
    $this->province = $this->model('ProfileModel');
  }
  public function index($tab = 1, $order = 1)
  {
    $title = 'Profile';
    $this->data['pages_title'] = $title;
    if (isset($_POST['editProfileGoogle'])) {
      $user_id = Session::data('google_login');
      $user_phone = $_POST['user_phone'];
      $user_address = $_POST['user_address'];
      $data = [
        'user_phone' => $user_phone,
        'user_address' => $user_address
      ];
      $this->province->updateProfile($data, $user_id);
      Session::flash('updateTrue', 'Profile updated successfully');
      $response = new Response();
      $response->redirect('profile/index/1');
    } elseif (isset($_POST['editProfileClient'])) {
      $user_id = Session::data('client_login');
      $user_image = $_POST['user_image'];
      $user_phone = $_POST['user_phone'];
      $user_address = $_POST['user_address'];
      $user_name = $_POST['user_name'];
      $target_dir = 'public/assets/admin/uploaded_img/';
      $target_file = $target_dir . basename($user_image);
      move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file);
      $getImageUser = $this->province->getImageUser($user_id);
      $data = [
        'user_image' => $user_image ? $user_image : $getImageUser['user_image'],
        'user_image_path' => $target_dir,
        'user_phone' => $user_phone,
        'user_address' => $user_address,
        'user_name' => $user_name
      ];
      $this->province->updateProfile($data, $user_id);
      Session::flash('updateTrue', 'Profile updated successfully');
      $response = new Response();
      $response->redirect('profile/index/1');
    } elseif (isset($_POST['editAddressGoogle'])) {
      $order_id = $_POST['order_id'];
      $user_address = $_POST['user_address'];
      $data = [
        'user_address' => $user_address
      ];
      $this->province->updateAddressOrder($data, $order_id);
      Session::flash('updateAddress', 'Address updated successfully');
      $response = new Response();
      $response->redirect('profile/index/2/1');
    } elseif (isset($_POST['cancelOrderGoogle'])) {
      $order_detail_id = $_POST['order_detail_id'];
      $data = [
        'is_delete' => 1
      ];
      $this->province->updateAddressOrderDetail($data, $order_detail_id);
      Session::flash('deleteOrder', 'Order Delete successfully');
      $response = new Response();
      $response->redirect('profile/index/2/1');
    }
    $this->data['sub_content']['updateTrue'] = Session::flash('updateTrue');
    $this->data['sub_content']['updateAddress'] = Session::flash('updateAddress');
    $this->data['sub_content']['deleteOrder'] = Session::flash('deleteOrder');
    $this->data['sub_content']['tab'] = $tab;
    $this->data['sub_content']['order'] = $order;
    $this->data['content'] = 'client/profile/profile';
    $this->render('client/layoutClient/client_layout', $this->data);
  }
}
