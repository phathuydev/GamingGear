<?php
class BannerModel extends Model
{
    private $__table = "banners_home";

    // Define table in Model
    function tableFill()
    {
        return 'banners_home';
    }

    function fieldFill()
    {
        return '*';
    }

    public function getBannerHome()
    {
        $data = $this->db->table('banners_home')
            ->select('banner_home_id, banner_home_image, banner_home_path, create_at')
            ->get();
        return $data;
    }

    public function getBannerEdit($banner_home_id)
    {
        $data = $this->db->table('banners_home')
            ->select('banner_home_id, banner_home_image, banner_home_path, create_at')
            ->where('banner_home_id', '=', $banner_home_id)
            ->get();
        return $data;
    }

    public function getBannerProductEdit($banner_product_id)
    {
        $data = $this->db->table('banners_product')
            ->select('product_id, banner_product_id, banner_product_image, banner_product_path, create_at')
            ->where('banner_product_id', '=', $banner_product_id)
            ->get();
        return $data;
    }

    public function getBannerProduct()
    {
        $data = $this->db->table('banners_product')
            ->join('products', 'banners_product.product_id = products.product_id')
            ->select('products.product_id AS product_id, products.product_name AS product_name, products.product_image AS product_image, products.product_image_path AS product_image_path,
    COUNT(banners_product.banner_product_id) AS count_banner_product')
            ->groupBy('products.product_id, products.product_name, products.product_image, products.product_image_path')
            ->get();
        return $data;
    }

    public function getBannerProductDetail($product_id)
    {
        $data = $this->db->table('banners_product')
            ->select('banner_product_id, product_id, banner_product_image, banner_product_path, create_at, update_at')
            ->where('product_id', '=', $product_id)
            ->orderBy('create_at', 'DESC')
            ->get();
        return $data;
    }

    public function insertBannerHome($data)
    {
        $this->db->table('banners_home')->insert($data);
    }

    public function insertBannerProduct($data, $product_id)
    {
        $this->db->table('banners_product')->where('product_id', '=', $product_id)->insert($data);
    }

    public function updateBannerHome($data, $banner_home_id)
    {
        $this->db->table('banners_home')->where('banner_home_id', '=', $banner_home_id)->update($data);
    }

    public function updateBannerProduct($data, $banner_product_id)
    {
        $this->db->table('banners_product')->where('banner_product_id', '=', $banner_product_id)->update($data);
    }

    public function deleteBannerHome($banner_home_id)
    {
        $this->db->table('banners_home')->where('banner_home_id', '=', $banner_home_id)->delete();
    }

    public function deleteBannerProduct($banner_product_id)
    {
        $this->db->table('banners_product')->where('banner_product_id', '=', $banner_product_id)->delete();
    }
}
