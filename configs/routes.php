<?php
$routes['default_controller'] = 'home';
// Đường dẫn ảo => đường dẫn thật
// Admin
$routes['lgAdmin'] = 'admin/login/get_login';
$routes['gg-admin'] = 'admin/dashboard';
// Client
$routes['home'] = 'home';
$routes['products'] = 'client/product/product';
$routes['product-detail'] = 'client/product/product_detail';
$routes['product-search'] = 'client/product/product_search';
$routes['product-category'] = 'client/product/product_category';
$routes['cart'] = 'client/cart/cart';
$routes['contact'] = 'client/contact/contact';
$routes['profile'] = 'client/profile/profile';
$routes['order'] = 'client/profile/order';
$routes['post'] = 'client/post/post';
$routes['post-detail'] = 'client/post/post_detail';
$routes['contact'] = 'client/contact/contact';
$routes['checkout'] = 'client/cart/checkout';
$routes['thank'] = 'client/cart/thank';
$routes['lgUser'] = 'client/account/login';
$routes['logout'] = 'client/account/logout';
$routes['register'] = 'client/account/register';
$routes['forgot'] = 'client/account/forgot';
$routes['resetpass'] = 'client/account/resetpass';
// $routes['post/.+-(\d+).php'] = 'client/post/post_detail/$1';