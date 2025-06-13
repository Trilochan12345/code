<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/welcome', 'Home::index');

// Login routes
$routes->get('/', 'Home::login');
$routes->post('/login', 'Home::auth');
$routes->post('/login2', 'Home::auth2');

$routes->get('/logout', 'Home::logout');

// Registration
$routes->get('/register', 'Home::register');

// Dashboard and other pages
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/dispatch', 'Home::dispatch');
$routes->get('/codes', 'Home::codes');
$routes->get('/addcodes', 'Home::addcodes');
$routes->post('/codesadd', 'Home::codesadd');
$routes->get('/coders', 'Home::login2');
$routes->get('/coder', 'Home::coders');
$routes->get('/createaccount', 'Home::createaccount');

// Add Item route (GET to show form, POST to submit form)
$routes->match(['get', 'post'], 'additem', 'Home::additem');

$routes->post('/additemvalue', 'Home::additemvalue');
$routes->post('/codersadd', 'Home::codersadd');

