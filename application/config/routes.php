<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Admincontroller/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// AUTH
$route['login'] = 'Admincontroller/kategori';
$route['logout'] = 'Admincontroller/logout';

// DASHBOARD
$route['dashboard'] = 'Kategoricontroller/index';

// KATEGORI
$route['kategori'] = 'Kategoricontroller/index';
$route['admin/kategori/create'] = 'Kategoricontroller/create';
$route['kategori/save'] = 'Kategoricontroller/save';
$route['kategori/delete/(:num)'] = 'Kategoricontroller/delete/$1';

// PROMO
$route['promo'] = 'Promocontroller/index';
$route['promo/create'] = 'Promocontroller/create';
$route['admin/promo/save'] = 'Promocontroller/save';
$route['promo/delete/(:num)'] = 'Promocontroller/delete/$1';
