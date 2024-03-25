<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('lang/{locale}', 'Language::index');

//  default language: id-ID
$routes->get('/', 'HomepageController::index');
$routes->get('/destination', 'DestinationController::index');
$routes->get('/contact-us', 'ContactUsController::index');
$routes->get('/about-us', 'AboutUsController::index');
$routes->get('/faq', 'FAQController::index');
$routes->get('/article', 'ArticleController::index');
$routes->get('/article/detail', 'ArticleController::detail');
$routes->get('/gallery', 'GalleryController::index');
$routes->get('/gallery/detail', 'GalleryController::detail');

// Page not found handler
$routes->set404Override('App\Controllers\ErrorController::show404');
