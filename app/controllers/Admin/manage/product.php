
<?php
class Product extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
      $this->province = $this->model('ProductModel');
  }
  public function index()
  {
      $listProduct = $this->province->getAllProduct();
    $title = 'List Product';
      $this->data['sub_content']['listProduct'] = $listProduct;
    $this->data['pages_title'] = $title;
      if (isset($_POST['updateIsdelete'])) {
          $product_id = $_POST['product_id'];
          $is_delete = $_POST['is_delete'];
          $user_delete = $_POST['user_delete'];
          $create_at = $_POST['create_at'];
          $update_at = $_POST['update_at'];
          $user_create = $_POST['user_create'];
          $user_update = $_POST['user_update'];
          $data = [
              'is_delete' => $is_delete,
              'user_delete' => $user_delete,
              'create_at' => $create_at,
              'update_at' => $update_at,
              'user_create' => $user_create,
              'user_update' => $user_update
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
      if (isset($_POST['insertProduct'])) {
          $product_name = $_POST['product_name'];
          $product_image = $_FILES['product_image']['name'];
          $product_price = $_POST['product_price'];
          $product_price_reduce = $_POST['product_price_reduce'];
          $product_quantity = $_POST['product_quantity'];
          $product_category = $_POST['product_category'];
          $product_special = $_POST['product_special'];
          $product_describe = $_POST['product_describe'];
          $user_create = $_POST['user_create'];
          $user_update = $_POST['user_update'];
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
              'product_category' => $product_category,
              'product_special' => $product_special,
              'product_describe' => $product_describe,
              'user_create' => $user_create,
              'user_update' => $user_update
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
      $firstProduct = $this->province->getFirstProduct($product_id);
    $title = 'Edit Product';
      $this->data['sub_content']['firstProduct'] = $firstProduct;
    $this->data['pages_title'] = $title;
      if (isset($_POST['updateProduct'])) {
          $product_name = $_POST['product_name'];
          $product_image = $_FILES['product_image']['name'];
          $product_price = $_POST['product_price'];
          $product_price_reduce = $_POST['product_price_reduce'];
          $product_quantity = $_POST['product_quantity'];
          $product_category = $_POST['product_category'];
          $product_special = $_POST['product_special'];
          $product_describe = $_POST['product_describe'];
          $user_create = $_POST['user_create'];
          $user_update = $_POST['user_update'];
          $create_at = $_POST['create_at'];
          $update_at = $_POST['update_at'];
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
              'product_category' => $product_category,
              'product_special' => $product_special,
              'product_describe' => $product_describe,
              'create_at' => $create_at,
              'update_at' => $update_at,
              'user_create' => $user_create,
              'user_update' => $user_update
          ];
          $this->province->updateProduct($product_id);
          $response = new Response();
          $response->redirect('admin/manage/product');
      }
    $this->data['body'] = 'admin/product/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
