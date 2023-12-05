<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
class AppServiceProvider extends ServiceProvider
{
  public function boot()
  {
    function formatTimeAgo($timestamp)
    {
      $currentTimestamp = time();
      $difference = $currentTimestamp - $timestamp;

      $seconds = $difference;
      $minutes = round($difference / 60);
      $hours = round($difference / 3600);
      $days = round($difference / 86400);

      if ($seconds < 60) {
        return $seconds . " seconds ago";
      } elseif ($minutes < 60) {
        return $minutes . " minute ago";
      } elseif ($hours < 24) {
        return $hours . " hours ago";
      } elseif ($days < 30) {
        return $days . " days ago";
      } else {

        $months = round($days / 30);
        $years = round($days / 365);

        if ($months < 12) {
          return $months . " last month";
        } else {
          return $years . " last year";
        }
      }
    }

      // Hàm tạo mã đơn hàng ngẫu nhiên gồm chữ và số
      // function generateOrderCode()
      // {
      //   $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Các ký tự có thể sử dụng
      //   $codeLength = 6; // Độ dài mã đơn hàng

      //   $code = ''; // Chuỗi mã đơn hàng ban đầu

      //   // Tạo mã đơn hàng ngẫu nhiên bằng cách chọn ngẫu nhiên các ký tự từ chuỗi $characters
      //   for ($i = 0; $i < $codeLength; $i++) {
      //     $code .= $characters[rand(0, strlen($characters) - 1)];
      //   }

      //   return $code;
      // }
      // $data['generateOrderCode'] = generateOrderCode();
    // Get user admin
    $getUserSession = $this->db->table('users')
      ->select('user_id, user_name, user_email, user_phone, user_image, user_image_path, 
    user_address, user_role, user_locked, create_at, user_create')
      ->where('user_id', '=', Session::data('admin_login'))
      ->first();
    $data['getUserSession'] = $getUserSession;
    // Get user client
    $getUserClient = $this->db->table('users')
      ->select('user_id, user_name, user_email, user_phone, user_image, user_image_path, 
    user_address, user_role, user_locked, create_at, user_create')
      ->where('user_id', '=', Session::data('client_login'))
      ->first();
    $data['getUserClient'] = $getUserClient;
      // Get user google
      $getUserGoogle = $this->db->table('users')
          ->select('user_id, user_name, user_email, user_phone, user_image, user_image_path,
    user_address')
          ->where('user_id', '=', Session::data('google_login'))
          ->first();
      $data['getUserGoogle'] = $getUserGoogle;
    // count user yesterday
    $yesterday = date('Y-m-d', strtotime('-1 day'));
    $countUserYesterDay = $this->db->table('users')
      ->select('COUNT(user_id) as countUserYesterDay')
      ->where('create_at', '>=', $yesterday)
      ->where('is_delete', '=', 0)
      ->where('user_role', '=', 0)
      ->first();
    $data['countUserYesterDay'] = $countUserYesterDay;
    // count user
    $countAllUser = $this->db->table('users')
      ->select('COUNT(user_id) as countAllUser')
      ->where('is_delete', '=', 0)
      ->where('user_role', '=', 0)
      ->first();
    $data['countAllUser'] = $countAllUser;

    // count product yesterday
    $today = date('Y-m-d 00:00:00');
    $countProductYesterDay = $this->db->table('products')
      ->select('COUNT(product_id) as countProductYesterDay')
      ->where('create_at', '>=', $today)
      ->where('is_delete', '=', 0)
      ->first();
    $data['countProductYesterDay'] = $countProductYesterDay;
    // count product
    $countAllProduct = $this->db->table('products')
      ->select('COUNT(product_id) as countAllProduct')
      ->where('is_delete', '=', 0)
      ->first();
    $data['countAllProduct'] = $countAllProduct;

    // count order yesterday
    $countOrderYesterDay = $this->db->table('orders')
      ->select('COUNT(order_id) as countOrderYesterDay')
      ->where('create_at', '>=', $today)
      ->where('is_delete', '=', 0)
      ->first();
    $data['countOrderYesterDay'] = $countOrderYesterDay;
    // count order
    $countAllOrder = $this->db->table('orders')
      ->select('COUNT(order_id) as countAllOrder')
      ->where('is_delete', '=', 0)
      ->first();
    $data['countAllOrder'] = $countAllOrder;

    // count category yesterday
    $countCategoryYesterDay = $this->db->table('categories')
      ->select('COUNT(category_id) as countCategoryYesterDay')
      ->where('create_at', '>=', $today)
      ->where('is_delete', '=', 0)
      ->first();
    $data['countCategoryYesterDay'] = $countCategoryYesterDay;
    // count user
    $countAllCategory = $this->db->table('categories')
      ->select('COUNT(category_id) as countAllCategory')
      ->where('is_delete', '=', 0)
      ->first();
    $data['countAllCategory'] = $countAllCategory;

    // count comment products yesterday
    $countCommentProductYesterDay = $this->db->table('comments')
        ->select('COUNT(comment_id) as countCommentProductYesterDay')
      ->where('create_at', '>=', $today)
      ->where('is_delete', '=', 0)
      ->first();
    $data['countCommentProductYesterDay'] = $countCommentProductYesterDay;
    // count user
    $countAllCommentProduct = $this->db->table('comments')
        ->select('COUNT(comment_id) as countAllCommentProduct')
      ->where('is_delete', '=', 0)
      ->first();
    $data['countAllCommentProduct'] = $countAllCommentProduct;

    // count comment posts yesterday
      $countCommentPostYesterDay = $this->db->table('comments')
          ->select('COUNT(comment_id) as countCommentPostYesterDay')
      ->where('is_delete', '=', 0)
      ->where('create_at', '>=', $today)
      ->first();
    $data['countCommentPostYesterDay'] = $countCommentPostYesterDay;
    // count user
      $countAllCommentPost = $this->db->table('comments')
          ->select('COUNT(comment_id) as countAllCommentPost')
      ->where('is_delete', '=', 0)
      ->first();
    $data['countAllCommentPost'] = $countAllCommentPost;

    // count post yesterday
    $countPostYesterDay = $this->db->table('posts')
      ->select('COUNT(post_id) as countPostYesterDay')
      ->where('is_delete', '=', 0)
      ->where('create_at', '>=', $today)
      ->first();
    $data['countPostYesterDay'] = $countPostYesterDay;
    // count post
    $countAllPost = $this->db->table('posts')
      ->select('COUNT(post_id) as countAllPost')
      ->where('is_delete', '=', 0)
      ->first();
    $data['countAllPost'] = $countAllPost;

    // Total revenue today for order
    // total revenue today
    $totalRevenueToday = $this->db->table('orders')
      ->select('SUM(order_total) as totalRevenueToday')
      ->where('create_at', '>', $today)
      ->where('is_delete', '=', 0)
      ->first();
    $data['totalRevenueToday'] = $totalRevenueToday;
    // total order today
    $countOrderToday = $this->db->table('orders')
      ->select('COUNT(order_id) as countOrderToday')
      ->where('create_at', '>', $today)
      ->where('is_delete', '=', 0)
      ->first();
    $data['countOrderToday'] = $countOrderToday;
    // total revenue order 1 years
    $countOrderYear = $this->db->table('orders')
      ->select('SUM(order_total) as countOrderYear')
      ->where('create_at', '>', date('Y-01-01 00:00:00'))
      ->where('is_delete', '=', 0)
      ->first();
    $data['countOrderYear'] = $countOrderYear;
    // total revenu month
    $totalRevenueMonth = $this->db->table('orders')
      ->select('SUM(order_total) as totalRevenueMonth')
      ->where('create_at', '>', date('Y-m-d', strtotime('-1 month')))
      ->where('is_delete', '=', 0)
      ->first();
    $data['totalRevenueMonth'] = $totalRevenueMonth;
    // total revenue twomonth
    $totalRevenueTwoMonth = $this->db->table('orders')
      ->select('SUM(order_total) as totalRevenueTwoMonth')
      ->where('create_at', '>', date('Y-m-d', strtotime('-2 month')))
      ->where('is_delete', '=', 0)
      ->first();
    $data['totalRevenueTwoMonth'] = $totalRevenueTwoMonth;
    // total revenue last month
    $totalRevenueLastMonth = ($totalRevenueTwoMonth['totalRevenueTwoMonth'] - $totalRevenueMonth['totalRevenueMonth']);
    $data['totalRevenueLastMonth'] = $totalRevenueLastMonth;
    // perent revenue
    if ($totalRevenueLastMonth != 0) {
      $percent = (($totalRevenueMonth['totalRevenueMonth'] - $totalRevenueLastMonth) / $totalRevenueLastMonth) * 100;
      $data['percent'] = round($percent, 2);
    } else {
      $percent = 0;
      $data['percent'] = round($percent, 2);
    }
    // total revenue never
    $totalRevenue = $this->db->table('orders')
      ->select('SUM(order_total) as totalRevenue')
      ->where('is_delete', '=', 0)
      ->first();
    $data['totalRevenue'] = $totalRevenue;
    // total payment cash
    $totalOrderPaymentCash = $this->db->table('orders')
      ->select('SUM(order_total) as totalOrderPaymentCash')
      ->where('create_at', '>', $today)
      ->where('is_delete', '=', 0)
      ->where('order_payment', '=', 1)
      ->first();
    $data['totalOrderPaymentCash'] = $totalOrderPaymentCash;
    // total paymment credit
    $totalOrderPaymentCredit = $this->db->table('orders')
      ->select('SUM(order_total) as totalOrderPaymentCredit')
      ->where('create_at', '>', $today)
      ->where('is_delete', '=', 0)
      ->where('order_payment', '=', 2)
      ->first();
    $data['totalOrderPaymentCredit'] = $totalOrderPaymentCredit;
    // get order limit 5
    $getOrderLimit = $this->db->table('orders')
      ->join('users', 'orders.user_id = users.user_id')
      ->join('order_payment', 'orders.order_payment = order_payment.order_payment_id')
      ->join('order_status', 'orders.order_status = order_status.order_status_id')
      ->select('users.user_image_path as user_image_path, users.user_image as user_image, orders.user_name as user_name, 
      orders.user_email as user_email, orders.user_phone as user_phone, orders.user_address as user_address, orders.create_at as create_at,
      orders.order_total, order_payment.order_payment_name as order_payment_name, order_status.order_status_name as order_status_name')
      ->where('orders.is_delete', '=', 0)
      ->where('users.is_delete', '=', 0)
        ->where('orders.create_at', '>', $today)
        ->orderBy('orders.create_at', 'DESC')
      ->limit('5')
      ->get();
    $data['getOrderLimit'] = $getOrderLimit;
      //Get order user session
      $getOrderSession = $this->db->table('orders')
          ->join('order_status', 'orders.order_status = order_status.order_status_id')
          ->join('orders_detail', 'orders.order_id = orders_detail.order_id')
          ->join('products', 'orders_detail.product_id = products.product_id')
          ->select('products.product_image_path AS product_image_path, products.product_image AS product_image, products.product_name AS product_name,
      products.product_price AS product_price, products.product_price_reduce AS product_price_reduce, orders_detail.order_total_product AS order_total_product,
      orders.order_total AS order_total, order_status.order_status_name AS order_status_name, orders_detail.order_quantity AS order_quantity, orders.user_name AS user_name, orders_detail.order_detail_id as order_detail_id,
      orders.user_email AS user_email, orders.user_phone AS user_phone, orders.user_address AS user_address, orders.code_orders as code_orders, orders.order_id as order_id, orders.order_status as order_status')
          ->where('orders_detail.is_delete', '=', 0)
          ->where('orders.user_id', '=', (Session::data('client_login')) ? Session::data('client_login') : Session::data('google_login'))
          ->orderBy('orders.create_at', 'DESC')
          ->get();
      $data['getOrderSession'] = $getOrderSession;
      //Get order cancel user session
      $getOrderCancel = $this->db->table('orders')
          ->join('order_status', 'orders.order_status = order_status.order_status_id')
          ->join('orders_detail', 'orders.order_id = orders_detail.order_id')
          ->join('products', 'orders_detail.product_id = products.product_id')
          ->select('products.product_id as product_id, products.product_image_path AS product_image_path, products.product_image AS product_image, products.product_name AS product_name,
      products.product_price AS product_price, products.product_price_reduce AS product_price_reduce, orders_detail.order_total_product AS order_total_product,
      orders.order_total AS order_total, order_status.order_status_name AS order_status_name, orders_detail.order_quantity AS order_quantity, orders.user_name AS user_name, orders_detail.order_detail_id as order_detail_id,
      orders.user_email AS user_email, orders.user_phone AS user_phone, orders.user_address AS user_address, orders.code_orders as code_orders, orders.order_id as order_id, orders.order_status as order_status')
          ->where('orders_detail.is_delete', '=', 1)
          ->where('orders.user_id', '=', (Session::data('client_login')) ? Session::data('client_login') : Session::data('google_login'))
          ->orderBy('orders.create_at', 'DESC')
          ->get();
      $data['getOrderCancel'] = $getOrderCancel;
    // get order limit 5 during the day
    $getOrderLimitDuringTheDay = $this->db->table('orders')
      ->join('users', 'orders.user_id = users.user_id')
      ->join('order_payment', 'orders.order_payment = order_payment.order_payment_id')
      ->join('order_status', 'orders.order_status = order_status.order_status_id')
      ->select('users.user_image_path as user_image_path, users.user_image as user_image, orders.user_name as user_name, 
      orders.user_email as user_email, orders.user_phone as user_phone, orders.user_address as user_address, orders.create_at as create_at,
      orders.order_total, order_payment.order_payment_name as order_payment_name, order_status.order_status_name as order_status_name')
      ->where('orders.is_delete', '=', 0)
      ->where('orders.create_at', '>', $today)
      ->where('users.is_delete', '=', 0)
        ->orderBy('orders.create_at', 'DESC')
      ->limit('3')
      ->get();
    $data['getOrderLimitDuringTheDay'] = $getOrderLimitDuringTheDay;
    // get comment product new
    $getCommentProductDashboard = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
      ->select('comments.comment_content as comment_content, comments.create_at as create_at,
      users.user_image_path as user_image_path, users.user_image as user_image, users.user_name as user_name')
      ->where('comments.is_delete', '=', 0)
        ->where('comments.create_at', '>', $today)
      ->where('users.is_delete', '=', 0)
        ->orderBy('comments.create_at', 'DESC')
        ->limit('10')
      ->get();
    $data['getCommentProductDashboard'] = $getCommentProductDashboard;
    // get comment product new during the day
    $getCommentProductDuringTheDay = $this->db->table('comments')
      ->join('users', 'comments.user_id = users.user_id')
      ->select('comments.comment_content as comment_content, comments.create_at as create_at,
      users.user_image_path as user_image_path, users.user_image as user_image, users.user_name as user_name')
      ->where('comments.is_delete', '=', 0)
      ->where('comments.create_at', '>', $today)
      ->where('users.is_delete', '=', 0)
        ->orderBy('comments.create_at', 'DESC')
      ->limit('3')
      ->get();
    $data['getCommentProductDuringTheDay'] = $getCommentProductDuringTheDay;

    // Get banner home
      $getBannerHomeClient = $this->db->table('banners_home')
      ->select('banner_home_id, banner_home_image, banner_home_path, create_at, update_at')
      ->get();
      $data['getBannerHomeClient'] = $getBannerHomeClient;

    // get products special
    $getProductSpecial = $this->db->table('products')
      ->join('categories', 'products.category_id = categories.category_id')
      ->select('products.product_id AS product_id, products.product_name AS product_name, products.product_image AS product_image, 
       products.product_image_path AS product_image_path, products.product_price AS product_price,
       products.product_price_reduce AS product_price_reduce, products.product_quantity AS product_quantity, 
       products.category_id AS category_id, products.product_special AS product_special, products.product_describe AS product_describe, 
       products.create_at AS create_at, categories.category_id AS category_id, categories.category_name AS category_name')
      ->where('products.is_delete', '=', 0)
      ->where('products.product_special', '=', 1)
      ->get();
    $data['getProductSpecial'] = $getProductSpecial;

    // get products category headset
      $getAllProductHome = $this->db->table('products')
      ->join('categories', 'products.category_id = categories.category_id')
      ->select('products.product_id AS product_id, products.product_name AS product_name, products.product_image AS product_image, 
         products.product_image_path AS product_image_path, products.product_price AS product_price,
         products.product_price_reduce AS product_price_reduce, products.product_quantity AS product_quantity, 
         products.category_id AS category_id, products.product_special AS product_special, products.product_describe AS product_describe, 
         products.create_at AS create_at, categories.category_id AS category_id, categories.category_name AS category_name')
      ->where('products.is_delete', '=', 0)
      ->get();
      $data['getAllProductHome'] = $getAllProductHome;

    $getAllCategory = $this->db->table('categories')
      ->select('*')
        ->where('is_delete', '=', 0)
      ->get();
      $data['getAllCategory'] = $getAllCategory;
      // Add to cart
      if (isset($_POST['add_to_cart'])) {
          if (!empty(Session::data('client_login'))) {
              if (isset($_SESSION['cart'])) {
                  $session_array_id = array_column($_SESSION['cart'], "product_id");
                  if (!in_array($_POST['product_id'], $session_array_id)) {
                      $session_array = array(
                          'product_id' => $_POST['product_id'],
                          'product_name' => $_POST['product_name'],
                          'product_price' => $_POST['product_price'],
                          'product_price_reduce' => $_POST['product_price_reduce'],
                          'product_image_path' => $_POST['product_image_path'],
                          'product_image' => $_POST['product_image'],
                          'product_quantity' => $_POST['product_quantity']
                      );
                      // Session::data('cart'[], $session_array);
                      $_SESSION['cart'][] = $session_array;
                      $response = new Response();
                      $response->redirect('carts');
                  } else {
                      if (isset($_POST['add_to_cart'])) {
                          if (isset($_SESSION['cart'])) {
                              $product_id_to_add = $_POST['product_id'];
                              foreach ($_SESSION['cart'] as &$product) {
                                  if ($product['product_id'] == $product_id_to_add) {
                                      $product['product_quantity']++;
                                      $response = new Response();
                                      $response->redirect('carts');
                                  }
                              }
                          }
                      }
                  }
              } else {
                  $session_array = array(
                      'product_id' => $_POST['product_id'],
                      'product_name' => $_POST['product_name'],
                      'product_price' => $_POST['product_price'],
                      'product_price_reduce' => $_POST['product_price_reduce'],
                      'product_image_path' => $_POST['product_image_path'],
                      'product_image' => $_POST['product_image'],
                      'product_quantity' => $_POST['product_quantity']
                  );
                  $_SESSION['cart'][] = $session_array;
                  $response = new Response();
                  $response->redirect('carts');
              }
          } elseif (!empty(Session::data('google_login'))) {
              if (isset($_SESSION['cart'])) {
                  $session_array_id = array_column($_SESSION['cart'], "product_id");
                  if (!in_array($_POST['product_id'], $session_array_id)) {
                      $session_array = array(
                          'product_id' => $_POST['product_id'],
                          'product_name' => $_POST['product_name'],
                          'product_price' => $_POST['product_price'],
                          'product_price_reduce' => $_POST['product_price_reduce'],
                          'product_image_path' => $_POST['product_image_path'],
                          'product_image' => $_POST['product_image'],
                          'product_quantity' => $_POST['product_quantity']
                      );
                      // Session::data('cart'[], $session_array);
                      $_SESSION['cart'][] = $session_array;
                      $response = new Response();
                      $response->redirect('carts');
                  } else {
                      if (isset($_POST['add_to_cart'])) {
                          if (isset($_SESSION['cart'])) {
                              $product_id_to_add = $_POST['product_id'];
                              foreach ($_SESSION['cart'] as &$product) {
                                  if ($product['product_id'] == $product_id_to_add) {
                                      $product['product_quantity']++;
                                      $response = new Response();
                                      $response->redirect('carts');
                                  }
                              }
                          }
                      }
                  }
              } else {
                  $session_array = array(
                      'product_id' => $_POST['product_id'],
                      'product_name' => $_POST['product_name'],
                      'product_price' => $_POST['product_price'],
                      'product_price_reduce' => $_POST['product_price_reduce'],
                      'product_image_path' => $_POST['product_image_path'],
                      'product_image' => $_POST['product_image'],
                      'product_quantity' => $_POST['product_quantity']
                  );
                  $_SESSION['cart'][] = $session_array;
                  $response = new Response();
                  $response->redirect('carts');
              }
          } else {
              $response = new Response();
              $response->redirect('lgUser');
          }
      }
      $totalPrice = 0;
      $totalCart = 0;
      if (isset($_POST['update_quantity'])) {
          if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as &$product) {
                  if ($product['product_id'] == $_POST['product_id']) {
                      // Cập nhật số lượng sản phẩm
                      $new_quantity = (int)$_POST['new_quantity'];
                      if ($new_quantity >= 1) {
                          $product['product_quantity'] = $new_quantity;
                      }
                      break;
                  }
              }
          }
      }
      if (isset($_SESSION['cart'])) {
          foreach ($_SESSION['cart'] as $item) {
              $totalPrice += ($item['product_price_reduce'] == null ? $item['product_price'] : $item['product_price_reduce']) * $item['product_quantity'];
              $totalCart = COUNT($_SESSION['cart']);
          }
      }
      if (isset($_POST['delete_product'])) {
          foreach ($_SESSION['cart'] as $key => $item) {
              $product_id = $_POST['product_id'];
              if ($item['product_id'] == $product_id) {
                  unset($_SESSION['cart'][$key]);
                  $totalPrice -= ($item['product_price_reduce'] == null ? $item['product_price'] : $item['product_price_reduce']) * $item['product_quantity'];
                  $totalCart = COUNT($_SESSION['cart']);
              }
          }
      }
      $data['totalPrice'] = $totalPrice;
      $data['totalCart'] = $totalCart;
    $data['copyright'] = 'Coppyright &copy; 2023 by GamingGear';
    View::share($data);
  }
}
