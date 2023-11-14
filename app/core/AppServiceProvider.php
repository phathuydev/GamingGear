<?php
class AppServiceProvider extends ServiceProvider {
  public function boot(){

      $data['copyright'] = 'Coppyright &copy; 2023 by Phat Huy';
    View::share($data);
  }
}