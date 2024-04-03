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

$routes->get('/id/destination', 'DestinationController::index');
$routes->get('/id/destination/(:segment)', 'DestinationController::detail/$1');
$routes->get('/en/destination', 'DestinationController::index');
$routes->get('/en/destination/(:segment)', 'DestinationController::detail/$1');

$routes->get('/contact-us', 'ContactUsController::index');
$routes->get('/about-us', 'AboutUsController::index');

$routes->get('/id/faq', 'FAQController::index');
$routes->get('/en/faq', 'FAQController::index');

$routes->get('/id/article', 'ArticleController::index');
$routes->get('/id/article/(:segment)/(:segment)', 'ArticleController::detail/$1/$2');
$routes->get('/en/article', 'ArticleController::index');
$routes->get('/en/article/(:segment)/(:segment)', 'ArticleController::detail/$1/$2');

$routes->get('/gallery', 'GalleryController::index');
$routes->get('/gallery/detail', 'GalleryController::detail');

// Page not found handler
$routes->set404Override('App\Controllers\ErrorController::show404');

//admin
$routes->get('/dasboard', 'admin\Dashboardctrl::index');

$routes->get('/commitment', 'admin\Commitment::index');
$routes->get('/tambahCommitment', 'admin\Commitment::tambah');
$routes->post('/proses_tambah', 'admin\Commitment::proses_tambah');
$routes->get('/editCommitment/(:num)', 'admin\Commitment::edit/$1');
$routes->post('/proses_edit/(:num)', 'admin\Commitment::proses_edit/$1');
$routes->get('/delete/(:any)', 'admin\Commitment::delete/$1');

$routes->get('/FounderSosmed', 'admin\FounderSosmedctrl::index');
$routes->get('/tambahFounderSosmed', 'admin\FounderSosmedctrl::tambah');
$routes->post('/proses_tambah_FounderSosmed', 'admin\FounderSosmedctrl::proses_tambah');
$routes->get('/editFounderSosmed/(:num)', 'admin\FounderSosmedctrl::edit/$1');
$routes->post('/proses_edit_FounderSosmed/(:num)', 'admin\FounderSosmedctrl::proses_edit/$1');
$routes->get('/delete_FounderSosmed/(:any)', 'admin\FounderSosmedctrl::delete/$1');

$routes->get('/how_it_works', 'admin\HowItWorkctrl::index');
$routes->get('/tambahhow_it_works', 'admin\HowItWorkctrl::tambah');
$routes->post('/proses_tambah_how_it_works', 'admin\HowItWorkctrl::proses_tambah');
$routes->get('/edithow_it_works/(:num)', 'admin\HowItWorkctrl::edit/$1');
$routes->post('/proses_edit_how_it_works/(:num)', 'admin\HowItWorkctrl::proses_edit/$1');
$routes->get('/delete_how_it_works/(:any)', 'admin\HowItWorkctrl::delete/$1');

$routes->get('/SosialMedia', 'admin\SosialMediactrl::index');
$routes->get('/tambahSosialMedia', 'admin\SosialMediactrl::tambah');
$routes->post('/proses_tambah_SosialMedia', 'admin\SosialMediactrl::proses_tambah');
$routes->get('/editSosialMedia/(:num)', 'admin\SosialMediactrl::edit/$1');
$routes->post('/proses_edit_SosialMedia/(:num)', 'admin\SosialMediactrl::proses_edit/$1');
$routes->get('/delete_SosialMedia/(:any)', 'admin\SosialMediactrl::delete/$1');