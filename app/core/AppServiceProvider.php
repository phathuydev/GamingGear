<?php
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
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
        $getAllCategory = $this->db->table('categories')->select('*')->get();
        $data['getAllCategory'] = $getAllCategory;
        $data['copyright'] = 'Coppyright &copy; 2023 by GamingGear';
        View::share($data);
  }
}
