<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::halaman_login');
// $routes->resource('employee');
// $routes->post('/login', 'AuthController::login');
// $routes->post('/login', 'LoginController::loginaction');

// $routes->post('/', 'LoginController::index');

$routes->get('/login', 'LoginController::index');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/registration', 'LoginController::registration');
$routes->post('/register/save', 'LoginController::save');
$routes->get('/Home', 'login::halaman_login');

// $routes->post('/login', 'LoginController::auth');
// $routes->post('/login', 'LoginController::auth');


$routes->get('logout', 'LoginController::logout');
$routes->get('/chartjs_suhu', 'Bpsi::halaman_charts_suhu', ['filter' => 'auth']);
$routes->get('dashboard', 'Home::index', ['filter' => 'auth']);
$routes->get('/export', 'Home::export', ['filter' => 'auth']);
$routes->get('/print', 'Home::print', ['filter' => 'auth']);
$routes->get('/chartjs_ph', 'Bpsi::halaman_charts_ph', ['filter' => 'auth']);
$routes->get('/chartjs_tds', 'Bpsi::halaman_charts_tds', ['filter' => 'auth']);
$routes->get('/basic-table', 'Bpsi::halaman_tabel', ['filter' => 'auth']);
$routes->post('/basic-table', 'Bpsi::halaman_tabel', ['filter' => 'auth']);

$routes->resource('bpsi');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
