<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->post('/register/store', 'Register::store');
$routes->get('/login', 'Login::index');
$routes->post('/loginadmin/auth', 'LoginAdmin::auth');
$routes->get('/admin', 'LoginAdmin::admin');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/rent', 'UserController::event');
$routes->get('/registeredevent', 'FetchController::index');
$routes->post('/fetch/store', 'FetchController::store');
$routes->get('/fetch/update/(:segment)', 'FetchController::update/$1');
$routes->get('/fetch/delete/(:segment)', 'FetchController::delete/$1');
$routes->get('/fetch/edit/(:segment)', 'FetchController::edit/$1');
$routes->post('/fetch/update/(:segment)', 'FetchController::update/$1');
$routes->get('/fetch/delete/(:segment)', 'FetchController::delete/$1');
$routes->get('/fetch/edit/(:segment)', 'FetchController::edit/$1');
$routes->get('/fetch/delete/(:segment)', 'FetchController::delete/$1');
$routes->get('/fetch/edit/(:segment)', 'FetchController::edit/$1');
$routes->get('/fetch/delete/(:segment)', 'FetchController::delete/$1');
$routes->get('/fetch/edit/(:segment)', 'FetchController::edit/$1');         

// Updated routes for events (formerly cars)
$routes->get('/events', 'EventController::index');  // Changed from CarController::car
$routes->get('/events/create', 'EventController::create');  // Changed from cars/create
$routes->post('/events/store', 'EventController::store');  // Changed from cars/store
$routes->get('/events/edit/(:segment)', 'EventController::edit/$1');  // Changed path
$routes->post('/events/update/(:segment)', 'EventController::update/$1');  // Changed path
$routes->get('/events/delete/(:segment)', 'EventController::delete/$1');  // Changed path
$routes->get('/rent-event', 'EventController::rent_events');  // Changed method name
$routes->post('/rent-event', 'EventController::rentEvent');  // Changed method name

$routes->post('event-register', 'EventController::rentEvent');


$routes->get('user/info', 'User::info');
$routes->get('/policy', 'Home::index');
$routes->get('/use', 'Home::indexing');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->get('/home', 'Home::home');
$routes->post('api/login', 'Api\LoginAPI::login');
$routes->post('api/register', 'Api\RegisterAPI::create');

$routes->get('/home', function() {
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }
    return view('home');
});  

$routes->get('/logout', function() {
    return view('login_form');
});