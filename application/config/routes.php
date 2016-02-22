<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'Users/login_reg_page';
$route['/user/(:num)'] = 'User/show/$1';
$route['default_controller'] = 'listings';
// $route['create_item'] = 'listings/create_item';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
