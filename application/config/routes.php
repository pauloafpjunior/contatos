<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'base';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['salvar'] = "base/salvar";
$route['editar/(:num)'] = "base/Editar/$1";
$route['atualizar'] = "base/Atualizar";
$route['excluir/(:num)'] = "base/Excluir/$1";
