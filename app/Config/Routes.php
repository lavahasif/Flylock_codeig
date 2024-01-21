<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
    // $routes->get('users', 'Users::index');
    // $routes->get('posts', 'Posts::index');


    // $routes->get('products', 'Products::index');
    // $routes->get('products/create', 'Products::create');
    // $routes->post('products', 'Products::store');
    // $routes->get('products/(:num)', 'Products::show/$1');
    // $routes->get('products/(:num)/edit', 'Products::edit/$1');
    // $routes->put('products/(:num)', 'Products::update/$1');
    // $routes->delete('products/(:num)', 'Products::destroy/$1');
});


service('auth')->routes($routes);
