<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../bootstrap.php';

define('APPNAME', 'My Phonebook');

session_start();

$router = new \Bramus\Router\Router();

// Auth routes
$router->post('/logout', '\App\Controllers\Auth\LoginController@destroy');
$router->get('/register', '\App\Controllers\Auth\RegisterController@create');
$router->post('/register', '\\App\Controllers\Auth\RegisterController@store');
$router->get('/login', '\App\Controllers\Auth\LoginController@create');
$router->post('/login', '\App\Controllers\Auth\LoginController@store');

// Website routes
$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/home', '\App\Controllers\HomeController@index');
$router->get('/detail', '\App\Controllers\DetailController@detail');
$router->get('/product', '\App\Controllers\ProductController@product');
$router->get('/product/add', '\App\Controllers\ProductController@add');
$router->post('/product', '\App\Controllers\ProductController@store');
$router->get('/product/edit/(\d+)', '\App\Controllers\ProductController@edit');
$router->post('/product/(\d+)', '\App\Controllers\ProductController@update');
$router->post('/product/delete/(\d+)','\App\Controllers\ProductController@destroy');

$router->run();
