<?php

class BannerModel extends Model
{
    private $__table = "banners";

    // Define table in Model
    function tableFill()
    {
        return 'banners';
    }

    function fieldFill()
    {
        return '*';
    }

    // Get all banners
    public function getAllBanners()
    {
        $data = $this->db->table('banners_product')->select('banner_product_id, product_id, banner_product_image, banner_product_path, create_at, update_at, user_create, user_update, user_delete')->where('is_delete', '=', '0')->get();
        return $data;
    }

    // Get banner detail by id
    public function getBannerDetail($banner_product_id)
    {
        $data = $this->db->table('banners_product')->select('banner_product_id, product_id, banner_product_image, banner_product_path, create_at, user_create')->where('banner_product_id', '=', $banner_product_id)->first();
        return $data;
    }

    // Create new banner
    public function insertBannerPD($data)
    {
        $this->db->table('banners_product')->insert($data);
    }

    // Update banner
    public function updateBannerPD($data, $banner_id)
    {
        $this->db->table('banners_prodcut')->where('banner_id', '=', $banner_id)->update($data);
    }

    // Delete banner
    public function deleteBannerPD($banner_id)
    {
        $data['is_delete'] = 1;
        $this->db->table('banners')->where('banner_id', '=', $banner_id)->update($data);
    }
}
