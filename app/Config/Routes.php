<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'SplashScreen::index');
$routes->get('/landing-page', 'LandingPage::index');
$routes->get('/login-user', 'LoginUser::index');
$routes->get('/login-admin', 'LoginAdmin::index');
$routes->get('/step-connect', 'StepConnect::index');
$routes->get('/hasil-connect', 'HasilConnect::index');


