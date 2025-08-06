<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'admincontroller/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// AUTH
$route['login'] = 'admincontroller/doLogin';
$route['logout'] = 'admincontroller/logout';

// DASHBOARD
$route['dashboard'] = 'kategoricontroller/index';

// KATEGORI
$route['kategori'] = 'kategoricontroller/index';
$route['admin/kategori/create'] = 'kategoricontroller/create';
$route['kategori/save'] = 'kategoricontroller/save';
$route['kategori/delete/(:num)'] = 'kategoricontroller/delete/$1';

// PROMO
$route['promo'] = 'promocontroller/index';
$route['promo/create'] = 'promocontroller/create';
$route['admin/promo/save'] = 'promocontroller/save';
$route['promo/delete/(:num)'] = 'promocontroller/delete/$1';
