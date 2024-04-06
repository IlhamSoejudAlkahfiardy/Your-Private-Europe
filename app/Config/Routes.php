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
$routes->get('/admin', 'admin\Dashboardctrl::index');
$routes->get('/admin/dashboard/index', 'admin\Dashboardctrl::index');


$routes->get('admin/faq/index', 'admin\FAQController::index');
$routes->get('admin/faq/tambah', 'admin\FAQController::tambah');
$routes->post('admin/faq/proses_tambah', 'admin\FAQController::proses_tambah');
$routes->get('admin/faq/edit/(:num)', 'admin\FAQController::edit/$1');
$routes->put('admin/faq/proses_edit/(:num)', 'admin\FAQController::proses_edit/$1');
$routes->get('admin/faq/delete/(:num)', 'admin\FAQController::delete/$1');

$routes->get('admin/faqC/index', 'admin\FaqC::index');
$routes->get('admin/faqC/tambah', 'admin\FaqC::tambah');
$routes->post('admin/faqC/proses_tambah', 'admin\FaqC::proses_tambah');
$routes->get('admin/faqC/edit/(:num)', 'admin\FaqC::edit/$1');
$routes->post('admin/faqC/proses_edit/(:num)', 'admin\FaqC::proses_edit/$1');
$routes->get('admin/faqC/delete/(:num)', 'admin\FaqC::delete/$1');

$routes->get('admin/testimonial/index', 'admin\Testimonialctrl::index');
$routes->get('admin/testimonial/tambah', 'admin\Testimonialctrl::tambah');
$routes->post('admin/testimonial/proses_tambah', 'admin\Testimonialctrl::proses_tambah');
$routes->get('admin/testimonial/edit/(:num)', 'admin\Testimonialctrl::edit/$1');
$routes->post('admin/testimonial/proses_edit/(:num)', 'admin\Testimonialctrl::proses_edit/$1');
$routes->get('admin/testimonial/delete/(:num)', 'admin\Testimonialctrl::delete/$1');


$routes->get('admin/usp/index', 'admin\Usp::index');
$routes->get('admin/usp/tambah', 'admin\Usp::tambah');
$routes->post('admin/usp/proses_tambah', 'admin\Usp::proses_tambah');
$routes->get('admin/usp/edit/(:num)', 'admin\Usp::edit/$1');
$routes->post('admin/usp/proses_edit/(:num)', 'admin\Usp::proses_edit/$1');
$routes->get('admin/usp/delete/(:num)', 'admin\Usp::delete/$1');


