<?php
class Banner extends Controller
{
  public $province;
  public $data = [];
  public function __construct()
  {
    $this->province = $this->model('');
  }
  public function index()
  {
    $title = 'List banner';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/banner/list';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function bannerhome_add()
    {
        $title = 'Add banner';
        $this->data['sub_content']['pages_title'] = $title;
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/banner/add';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function bannerhome_edit()
    {
        $title = 'Edit banner';
        $this->data['sub_content']['pages_title'] = $title;
        $this->data['pages_title'] = $title;
        $this->data['body'] = 'admin/banner/edit';
        $this->render('admin/layoutAdmin/admin_layout', $this->data);
    }

    public function bannerproduct_add()
  {
    $title = 'Add banner';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/banner/add';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }

    public function bannerproduct_edit()
  {
    $title = 'Edit banner';
    $this->data['sub_content']['pages_title'] = $title;
    $this->data['pages_title'] = $title;
    $this->data['body'] = 'admin/banner/edit';
    $this->render('admin/layoutAdmin/admin_layout', $this->data);
  }
}
