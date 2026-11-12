<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('best-software-development-company-in-kottayam', 'HomeController::about');
$routes->get('custom-software-web-iOS-app-development-company-in-kottayam', 'HomeController::services');
$routes->get('portfolio', 'HomeController::portfolio');
$routes->get('contact', 'HomeController::contact');
$routes->post('contact/send', 'HomeController::contactSend');
$routes->get('service/best-web-development-company-in-kottayam-kerala', 'HomeController::webDevelopment');
$routes->get('service/best-mobile-app-ios-app-development-Kottayam', 'HomeController::appDevelopment');
$routes->get('service/best-software-development-company-in-kottayam-kerala', 'HomeController::softwareDevelopment');
$routes->get('service/digital-marketing', 'HomeController::digitalMarketing');
$routes->get('service/seo-solutions', 'HomeController::seoSolutions');
$routes->get('service/erp-solutions', 'HomeController::erpSolutions');
$routes->get('careers', 'HomeController::careers');
$routes->post('careers/apply', 'HomeController::careersApply');
$routes->get('blog', 'HomeController::blog');

// ============================================================
// Admin Routes
// ============================================================
$routes->get('admin/login', 'AdminController::login');
$routes->post('admin/login', 'AdminController::loginSubmit');
$routes->get('admin/logout', 'AdminController::logout');

$routes->group('admin', ['filter' => 'auth'], static function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('contacts', 'AdminController::contacts');
    $routes->get('contacts/(:num)', 'AdminController::contactView/$1');
    $routes->get('contacts/delete/(:num)', 'AdminController::contactDelete/$1');
    $routes->get('careers', 'AdminController::careers');
    $routes->get('careers/(:num)', 'AdminController::careerView/$1');
    $routes->get('careers/delete/(:num)', 'AdminController::careerDelete/$1');
});

     