<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Templates::index');

$routes->group('master', static function ($routes) {
    $routes->get('item', 'Master\Item::index');
    $routes->get('umum', 'Master\Umum::index');
});
