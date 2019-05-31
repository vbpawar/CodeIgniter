<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['default_controller'] = 'pages/view';
$route['posts'] = 'posts/index';
$route['(:any)'] = 'pages/view/$1';
$route['posts/(:any)'] = 'posts/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
