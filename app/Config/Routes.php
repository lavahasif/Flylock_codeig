<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {

    // $routes->get('/', [\App\Controllers\Admin\Dashboard::class, 'index']);
    $routes->get('/', [\App\Controllers\Admin\LockingTypeController::class, 'index']);


    // Route for the index method (displaying the view)
    // $routes->get('lockingtype', 'LockingTypeController::index');

    // Route for creating a user type
    $routes->post('lockingtype/create', [\App\Controllers\Admin\LockingTypeController::class, 'createUserType']);

    // Route for listing user types
    $routes->get('lockingtype/list', [\App\Controllers\Admin\LockingTypeController::class, 'listUserTypes']);

    // Route for searching user types
    $routes->get('lockingtype/search/(:segment)',  [\App\Controllers\Admin\LockingTypeController::class, 'searchUserTypes']);
});


service('auth')->routes($routes);
