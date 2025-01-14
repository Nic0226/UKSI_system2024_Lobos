<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('admin', static function($routes){

    $routes->group('',[], static function($routes){
        $routes->get('home','AdminController::index',['as'=>'admin.home']);
    });
    
    $routes->group('',[], static function($routes){
        $routes->get('login','AuthController::loginForm',['as'=>'admin.login.form']);
        $routes->post('login','AuthController::loginHandler',['as'=>'admin.login.handler']);
    });
});
