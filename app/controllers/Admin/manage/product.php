
<?php
class Product extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      if (Session::data('admin_login') === null) {
          $response = new Response();
          $response->redirect('lgAdmin');
      }
      $this->province = $this->model('ProductModel');
  }
  public function index()
  {
      $listProduct = $this->province->getAllProduct();
    $title = 'List Product';
      $this->data['sub_content']['listProduct'] = $listProduct;
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $product_id = $_POST['product_id'];
          $data = [
              'is_delete' => 1,
              'user_delete' => Session::data('admin_login'),
              'update_at' => date("Y-m-d H:i:s"),
              'user_update' => Session::data('admin_login')
          ];
          $this->province->updateIsDelete($data, $product_id);
          $response = new Response();
          $response->redirect('admin/manage/product');
      }
    $this->data['body'] = 'admin/product/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
  public function product_add()
  {
    $title = 'Add Product';
      $this->data['sub_content']['pages_title'] = [];
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $product_name = $_POST['product_name'];
          $product_image = $_FILES['product_image']['name'];
          $product_price = $_POST['product_price'];
          $product_price_reduce = $_POST['product_price_reduce'];
          $product_quantity = $_POST['product_quantity'];
          $category_id = $_POST['category_id'];
          $product_special = $_POST['product_special'];
          $product_describe = $_POST['product_describe'];
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . basename($product_image);
          move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
          $data = [
              'product_name' => $product_name,
              'product_image' => $product_image,
              'product_image_path' => $target_dir,
              'product_price' => $product_price,
              'product_price_reduce' => $product_price_reduce,
              'product_quantity' => $product_quantity,
              'category_id' => $category_id,
              'product_special' => $product_special,
              'product_describe' => $product_describe,
              'user_create' => Session::data('admin_login'),
              'user_update' => Session::data('admin_login')
          ];
          $this->province->insertProduct($data);
          $response = new Response();
          $response->redirect('admin/manage/product');
      }
    $this->data['body'] = 'admin/product/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function product_edit($product_id = 0)
  {
      $getFirstProduct = $this->province->getFirstProduct($product_id);
      $this->data['sub_content']['getFirstProduct'] = $getFirstProduct;
      $getAllCategory = $this->province->getAllCategory();
      $this->data['sub_content']['getAllCategory'] = $getAllCategory;
      $this->data['sub_content']['product_id'] = $product_id;
    $title = 'Edit Product';
    $this->data['pages_title'] = $title;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $product_name = $_POST['product_name'];
          $product_image = $_FILES['product_image']['name'];
          $product_price = $_POST['product_price'];
          $imageDefault = $_POST['imageDefault'];
          $product_price_reduce = $_POST['product_price_reduce'];
          $product_quantity = $_POST['product_quantity'];
          $category_id = $_POST['category_id'];
          $product_special = $_POST['product_special'];
          $product_describe = $_POST['product_describe'];
          $user_update = Session::data('admin_login');
          $target_dir = 'public/assets/admin/uploaded_img/';
          $target_file = $target_dir . basename($product_image);
          move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
          $data = [
              'product_name' => $product_name,
              'product_image' => $product_image == null ? $imageDefault : $product_image,
              'product_image_path' => $target_dir,
              'product_price' => $product_price,
              'product_price_reduce' => $product_price_reduce,
              'product_quantity' => $product_quantity,
              'category_id' => $category_id,
              'product_special' => $product_special,
              'product_describe' => $product_describe,
              'update_at' => date("Y-m-d H:i:s"),
              'user_update' => $user_update
          ];
          $this->province->updateProduct($data, $product_id);
          $response = new Response();
          $response->redirect('admin/manage/product');
      }
    $this->data['body'] = 'admin/product/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
