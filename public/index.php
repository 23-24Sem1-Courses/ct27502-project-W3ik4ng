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
$router->get('/', '\App\Controllers\ProductController@index');
$router->get('/home', '\App\Controllers\ProductController@index');
$router->get('/detail/(\d+)', '\App\Controllers\ProductController@detail');
$router->get('/product', '\App\Controllers\ProductController@product');
$router->get('/product/add', '\App\Controllers\ProductController@add');
$router->post('/product', '\App\Controllers\ProductController@store');
$router->get('/product/edit/(\d+)', '\App\Controllers\ProductController@edit');
$router->post('/product/(\d+)', '\App\Controllers\ProductController@update');
$router->post('/product/delete/(\d+)','\App\Controllers\ProductController@destroy');

$router->get('/categories', '\App\Controllers\CategoryController@categories');
$router->post('/categories', '\App\Controllers\CategoryController@store');
$router->post('/categories/edit/(\d+)', '\App\Controllers\CategoryController@update');
$router->post('/categories/delete/(\d+)','\App\Controllers\CategoryController@destroy');

$router->get('/cart', '\App\Controllers\CartController@cart');
$router->post('/cart/add/(\d+)', '\App\Controllers\CartController@store');
$router->post('/cart/edit/(\d+)','\App\Controllers\CartController@update');
$router->post('/cart/delete/(\d+)','\App\Controllers\CartController@destroy');

$router->run();
