<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'RedirectController::redirectToId');

//  default language: id-ID
$routes->get('/id', 'id\HomepageController::index');
$routes->get('/id/destination', 'id\DestinationController::index');
$routes->get('/id/contact-us', 'id\ContactUsController::index');
$routes->get('/id/about-us', 'id\AboutUsController::index');
$routes->get('/id/faq', 'id\FAQController::index');
$routes->get('/id/article', 'id\ArticleController::index');

//  default language: en-NL
$routes->get('/en', 'en\HomepageController::index');
$routes->get('/en/destination', 'en\DestinationController::index');
$routes->get('/en/contact-us', 'en\ContactUsController::index');
$routes->get('/en/about-us', 'en\AboutUsController::index');
$routes->get('/en/faq', 'en\FAQController::index');


// Page not found handler
$routes->set404Override('App\Controllers\ErrorController::show404');
