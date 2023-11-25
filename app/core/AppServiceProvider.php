<?php
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

        // count user yesterday
        $yesterday = date('Y-m-d', strtotime('-7 day'));
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
        $yesterday = date('Y-m-d', strtotime('-7 day'));
        $countProductYesterDay = $this->db->table('products')
            ->select('COUNT(product_id) as countProductYesterDay')
            ->where('create_at', '>=', $yesterday)
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
        $yesterday = date('Y-m-d', strtotime('-7 day'));
        $countOrderYesterDay = $this->db->table('orders')
            ->select('COUNT(order_id) as countOrderYesterDay')
            ->where('create_at', '>=', $yesterday)
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
        $yesterday = date('Y-m-d', strtotime('-7 day'));
        $countCategoryYesterDay = $this->db->table('categories')
            ->select('COUNT(category_id) as countCategoryYesterDay')
            ->where('create_at', '>=', $yesterday)
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
        $yesterday = date('Y-m-d', strtotime('-7 day'));
        $countCommentProductYesterDay = $this->db->table('comments_product')
            ->select('COUNT(comment_product_id) as countCommentProductYesterDay')
            ->where('create_at', '>=', $yesterday)
            ->where('is_delete', '=', 0)
            ->first();
        $data['countCommentProductYesterDay'] = $countCommentProductYesterDay;
        // count user
        $countAllCommentProduct = $this->db->table('comments_product')
            ->select('COUNT(comment_product_id) as countAllCommentProduct')
            ->where('is_delete', '=', 0)
            ->first();
        $data['countAllCommentProduct'] = $countAllCommentProduct;

        // count comment posts yesterday
        $yesterday = date('Y-m-d', strtotime('-7 day'));
        $countCommentPostYesterDay = $this->db->table('comments_post')
            ->select('COUNT(comment_post_id) as countCommentPostYesterDay')
            ->where('is_delete', '=', 0)
            ->where('create_at', '>=', $yesterday)
            ->first();
        $data['countCommentPostYesterDay'] = $countCommentPostYesterDay;
        // count user
        $countAllCommentPost = $this->db->table('comments_post')
            ->select('COUNT(comment_post_id) as countAllCommentPost')
            ->where('is_delete', '=', 0)
            ->first();
        $data['countAllCommentPost'] = $countAllCommentPost;

        // count post yesterday
        $yesterday = date('Y-m-d', strtotime('-7 day'));
        $countPostYesterDay = $this->db->table('posts')
            ->select('COUNT(post_id) as countPostYesterDay')
            ->where('is_delete', '=', 0)
            ->where('create_at', '>=', $yesterday)
            ->first();
        $data['countPostYesterDay'] = $countPostYesterDay;
        // count post
        $countAllPost = $this->db->table('posts')
            ->select('COUNT(post_id) as countAllPost')
            ->where('is_delete', '=', 0)
            ->first();
        $data['countAllPost'] = $countAllPost;

        // Total revenue today for order
        $today = date('Y-m-d 00:00:00');
        // total revenue today
        $totalRevenueToday = $this->db->table('orders')
            ->select('SUM(order_total) as totalRevenueToday')
            ->where('create_at', '>', $today)
            ->where('is_delete', '=', 0)
            ->first();
        $data['totalRevenueToday'] = $totalRevenueToday;
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
      orders.order_total, order_payment.order_payment_name as order_payment_name, order_status.order_name as order_name')
            ->where('orders.is_delete', '=', 0)
            ->where('users.is_delete', '=', 0)
            ->orderBy('orders.create_at', 'DESC')
            ->limit('5')
            ->get();
        $data['getOrderLimit'] = $getOrderLimit;
        // get order limit 5 during the day
        $getOrderLimitDuringTheDay = $this->db->table('orders')
            ->join('users', 'orders.user_id = users.user_id')
            ->join('order_payment', 'orders.order_payment = order_payment.order_payment_id')
            ->join('order_status', 'orders.order_status = order_status.order_status_id')
            ->select('users.user_image_path as user_image_path, users.user_image as user_image, orders.user_name as user_name, 
      orders.user_email as user_email, orders.user_phone as user_phone, orders.user_address as user_address, orders.create_at as create_at,
      orders.order_total, order_payment.order_payment_name as order_payment_name, order_status.order_name as order_name')
            ->where('orders.is_delete', '=', 0)
            ->where('orders.create_at', '>', $today)
            ->where('users.is_delete', '=', 0)
            ->orderBy('orders.create_at', 'DESC')
            ->limit('3')
            ->get();
        $data['getOrderLimitDuringTheDay'] = $getOrderLimitDuringTheDay;
        // get comment product new
        $getCommentProductDashboard = $this->db->table('comments_product')
            ->join('users', 'comments_product.user_id = users.user_id')
            ->select('comments_product.comment_content as comment_content, comments_product.create_at as create_at,
      users.user_image_path as user_image_path, users.user_image as user_image, users.user_name as user_name')
            ->where('comments_product.is_delete', '=', 0)
            ->where('users.is_delete', '=', 0)
            ->orderBy('comments_product.create_at', 'DESC')
            ->limit('5')
            ->get();
        $data['getCommentProductDashboard'] = $getCommentProductDashboard;
        // get comment product new during the day
        $getCommentProductDuringTheDay = $this->db->table('comments_product')
            ->join('users', 'comments_product.user_id = users.user_id')
            ->select('comments_product.comment_content as comment_content, comments_product.create_at as create_at,
      users.user_image_path as user_image_path, users.user_image as user_image, users.user_name as user_name')
            ->where('comments_product.is_delete', '=', 0)
            ->where('comments_product.create_at', '>', $today)
            ->where('users.is_delete', '=', 0)
            ->orderBy('comments_product.create_at', 'DESC')
            ->limit('3')
            ->get();
        $data['getCommentProductDuringTheDay'] = $getCommentProductDuringTheDay;
        // get comment post new
        $getCommentPostDashboard = $this->db->table('comments_post')
            ->join('users', 'comments_post.user_id = users.user_id')
            ->select('comments_post.comment_content as comment_content, comments_post.create_at as create_at,
      users.user_image_path as user_image_path, users.user_image as user_image, users.user_name as user_name')
            ->where('comments_post.is_delete', '=', 0)
            ->where('users.is_delete', '=', 0)
            ->orderBy('comments_post.create_at', 'DESC')
            ->limit('5')
            ->get();
        $data['getCommentPostDashboard'] = $getCommentPostDashboard;

        $getAllCategory = $this->db->table('categories')
            ->select('*')
            ->get();

        $data['getAllCategory'] = $getAllCategory;
        $data['copyright'] = 'Coppyright &copy; 2023 by GamingGear';
        View::share($data);
  }
}
