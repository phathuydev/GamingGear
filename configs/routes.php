<?php
$routes['default_controller'] = 'home';
// Đường dẫn ảo => đường dẫn thật
// Admin
$routes['gg-login'] = 'admin/login'; 
$routes['gg-admin'] = 'admin/dashboard';
// Client
$routes['home'] = 'home';
$routes['products'] = 'client/product/product';
$routes['cart'] = 'client/cart/cart';
$routes['contact'] = 'client/contact/contact';
$routes['checkout'] = 'client/cart/checkout';
$routes['thank'] = 'client/cart/thank';
$routes['post/.+-(\d+).php'] = 'client/post/post/category/$1';