<?php

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $getAllCategory = $this->db->table('categories')->select('*')->where('is_delete', '=', '0')->get();
        $data['getAllCategory'] = $getAllCategory;
        $data['copyright'] = 'Coppyright &copy; 2023 by GamingGear';
    View::share($data);
  }
}
