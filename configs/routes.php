<?php
$routes['default_controller'] = 'home';
// Đường dẫn ảo => đường dẫn thật
// Admin
$routes['lgAdmin'] = 'admin/login';
$routes['gg-admin'] = 'admin/dashboard';
// Client
$routes['home'] = 'home';
$routes['products'] = 'client/product/product';
$routes['details'] = 'client/product/product/product_detail';
$routes['contacts'] = 'client/contact/contact';
$routes['posts'] = 'client/post/post';
$routes['carts'] = 'client/cart/cart';
$routes['checkout'] = 'client/cart/cart/checkout';
$routes['thanks'] = 'client/cart/cart/thanks';
$routes['profile'] = 'client/profile/profile';
$routes['lgUser'] = 'client/account/auth';
$routes['getAuthGoogle'] = 'core/client/account/auth';
$routes['profile'] = 'client/profile/profile';