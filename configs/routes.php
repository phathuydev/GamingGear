<?php
$routes['default_controller'] = 'home';
// Đường dẫn ảo => đường dẫn thật
// Admin
$routes['lgAdmin'] = 'admin/login/get_login';
$routes['gg-admin'] = 'admin/dashboard';
// Client
$routes['home'] = 'home';
$routes['products'] = 'client/product/product';
$routes['cart'] = 'client/cart/cart';
$routes['profile'] = 'client/profile/profile';
$routes['orderHistory'] = 'client/profile/order';
$routes['post'] = 'client/post/post';
$routes['postDetail'] = 'client/post/detail';
$routes['checkout'] = 'client/cart/checkout';
$routes['thank'] = 'client/cart/thank';
$routes['lgUser'] = 'client/account/login';
$routes['profile'] = 'client/profile/profile';
$routes['order'] = 'client/profile/order';
$routes['logout'] = 'client/account/logout';
$routes['register'] = 'client/account/register';
$routes['forgot'] = 'client/account/forgot';
$routes['resetpass'] = 'client/account/resetpass';
$routes['post/.+-(\d+).php'] = 'client/post/post/category/$1';