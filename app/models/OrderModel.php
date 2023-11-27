<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ clASs Model
class OrderModel extends Model
{
    private $__table = "orders";

    function tableFill()
    {
        return 'orders';
    }
    function fieldFill()
    {
        return '*';
    }

    public function getAllOrder()
    {
        $data = $this->db->table('orders')
            ->join('users', 'orders.user_id = users.user_id')
            ->join('order_status', 'orders.order_status = order_status.order_status_id')
            ->join('order_payment', 'orders.order_payment = order_payment.order_payment_id')
            ->select('orders.order_id AS order_id, orders.order_note AS order_note, orders.order_total AS order_total, 
            orders.order_payment AS order_payment, orders.order_status AS order_status,
            users.user_image AS user_image, users.user_image_path AS user_image_path,
            orders.user_name AS user_name, order_payment.order_payment_name AS order_payment_name, order_status.order_status_name AS order_status_name,
            orders.user_email AS user_email, orders.user_phone AS user_phone, orders.user_address AS user_address')
            ->where('orders.is_delete', '=', 0)
            ->orderBy('orders.create_at', 'DESC')
            ->get();
        return $data;
    }
    public function updateIsDelete($data, $order_id)
    {
        $this->db->table('orders')->where('orders_id', '=', $order_id)->update($data);
    }
    public function updateOrder($data, $order_id)
    {
        $this->db->table('orders')->where('order_id', '=', $order_id)->update($data);
    }
    public function getOrderDetail($order_id)
    {
        $data = $this->db->table('orders_detail')
            ->join('products', 'orders_detail.product_id = products.product_id')
            ->join('orders', 'orders_detail.order_id = orders.order_id')
            ->select('orders_detail.order_quantity AS order_quantity, orders_detail.order_total_product AS product_total,
            products.product_name AS product_name, products.product_image AS product_image, products.product_image_path AS product_image_path,
            order_payment as order_payment_name')
            ->where('orders_detail.order_id', '=', $order_id)
            ->get();
        return $data;
    }
    public function getAllStatusOrder()
    {
        $data = $this->db->table('order_status')
            ->select('*')
            ->get();
        return $data;
    }
}
