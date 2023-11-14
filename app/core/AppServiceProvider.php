<?php
class AppServiceProvider extends ServiceProvider {
  public function boot(){
    // $dataUser = $this->db->table('user')->where('user_id', '=' , 1)->first();
    // $categoryAll = $this->db->table('category')->get();
    // $data['categoryAll'] = $categoryAll;
    // $data['userInfo'] = $dataUser;
    $data['role'] = [
      'managerAdmin' => 'Website Manager'
    ];
    $data['copyright'] = 'Coppyright &copy; 2023 by Phat Huy';
    View::share($data);
  }
}