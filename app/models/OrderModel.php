<?php

// Kế thừa từ class Model
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
            ->select('orders.order_id as orderid, orders.order_note as ordernote, orders.order_total as ordertotal, 
            orders.order_payment as orderpayment, orders.order_status as orderstatus,
            users.user_name as username, users.user_email as useremail, users.user_phone as userphone, 
            users.user_address as useraddress, users.user_image as userimage, users.user_image_path as userimagepath,
            order_status.order_name as orderstatusname,
            order_payment.order_payment_name as orderpaymentname')
            ->where('orders.is_delete', '=', 0)
            ->orderBy('orders.create_at', 'DESC')
            ->get();
        return $data;
    }

    public function getFirstOrder($order_id)
    {
        $data = $this->db->table('orders')
            ->select('order_id, order_name, order_image, order_image_path, order_price, order_price_reduce, order_quantity, order_category, order_special, order_describe, create_at, user_create')->where('order_id', '=', $order_id)->first();
        return $data;
    }

    public function insertOrder($data)
    {
        $this->db->table('orders')->insert($data);
    }

    public function updateIsDelete($data, $order_id)
    {
        $this->db->table('orders')->where('orders_id', '=', $order_id)->update($data);
    }

    public function updateOrder($data, $product_id)
    {
        $this->db->table('orders')->where('order_id', '=', $product_id)->update($data);
    }

    public function getOrderDetail($order_id)
    {
        $data = $this->db->table('orders_detail')
            ->join('products', 'orders_detail.product_id = products.product_id')
            ->select('orders_detail.order_quantity as orderquantity, orders_detail.order_total_product as producttotal,
        products.product_name as productname, products.product_image as productimage, products.product_image_path as productimagepath')
            ->where('order_id', '=', $order_id)
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

?>