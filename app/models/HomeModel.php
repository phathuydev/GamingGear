<?php
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Set default time zone
// Kế thừa từ class Model
class HomeModel extends Model
{
    private $__table = "";

  // Định nghĩa table trong Model
  function tableFill()
  {
      return '';
  }

  function fieldFill()
  {
    return 'category_name';
  }

    // get All Category Name
    function getProductCategoryHome($category_id)
  {
      $getProductCategoryHome = $this->db->table('products')
          ->select('*')
          ->where('category_id', '=', $category_id)
          ->where('is_delete', '=', 0)
          ->get();
      return $getProductCategoryHome;
  }
}
