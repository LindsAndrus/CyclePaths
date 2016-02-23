<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['logout'] = 'Users/logout';
$route['login'] = 'Users/login_reg_page';
$route['contact'] = 'listings/contact';
$route['about'] = 'listings/about';
$route['/users/show/(:num)'] = 'Users/show/$1';
$route['/users/edit/(:num)'] = 'Users/edit/$1';
$route['default_controller'] = 'listings';
$route['create_item'] = 'listings/create_item';
$route['users_listings/(:num)'] = 'users/users_listings/$1';
$route['item_page/(:num)'] = 'listings/item_page/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;