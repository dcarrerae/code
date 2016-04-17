<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['user']['get']		    = 'user';
$route['user/(:num)']['get']    = 'user/readUser/$1';
$route['user']['post']		    = 'user/createUser';
$route['user/(:num)']['DELETE'] = 'user/deleteUser/$1';

$route['default_controller'] = 'user';














