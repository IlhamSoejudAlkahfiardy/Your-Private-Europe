<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('lang/{locale}', 'Language::index');

//  default language: id-ID
$routes->get('/', 'HomepageController::index');
$routes->get('/id', 'HomepageController::index');
$routes->get('/en', 'HomepageController::index');

$routes->get('/id/destinasi', 'DestinationController::index');
$routes->get('/id/destinasi/(:segment)', 'DestinationController::detail/$1');
$routes->get('/en/destination', 'DestinationController::index');
$routes->get('/en/destination/(:segment)', 'DestinationController::detail/$1');

$routes->get('/id/hubungi-kami', 'ContactUsController::index');
$routes->get('/en/contact-us', 'ContactUsController::index');
$routes->get('/about-us', 'AboutUsController::index');
$routes->get('/id/faq', 'FAQController::index');
$routes->get('/en/faq', 'FAQController::index');

$routes->get('/id/blog', 'ArticleController::index');
$routes->get('/id/blog/(:segment)/(:segment)', 'ArticleController::detail/$1/$2');
$routes->get('/en/blog', 'ArticleController::index');
$routes->get('/en/blog/(:segment)/(:segment)', 'ArticleController::detail/$1/$2');

$routes->get('/id/our-services', 'ServiceController::index');
$routes->get('/en/our-services', 'ServiceController::index');
$routes->get('/gallery/detail', 'GalleryController::detail');

// Page not found handler
$routes->set404Override('App\Controllers\ErrorController::show404');
