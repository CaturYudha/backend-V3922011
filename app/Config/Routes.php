<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproducts', 'ProductController::insertProduct');
$routes->get('products', 'ProductController::readProduct');
$routes->get('edit-product/(:any)', 'ProductController::getProduct/$1');
$routes->post('update-product/(:any)', 'ProductController::updateProduct/$1');
$routes->get('delete-product/(:any)', 'ProductController::deleteProduct/$1');

$routes->group('api', Function($routes){
    $routes->get('products', 'ProductController::readProductApi');
    $routes->get('products/(:any)', 'ProductController::getProductApi/$1');
});