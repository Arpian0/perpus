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
// $routes->get('signup', 'SignupController::index');
// $routes->post('signup', 'SignupController::signup');
// $routes->get('success', 'SignupController::success');

$routes->get('signup', 'SignupController::signupForm');
$routes->post('signup', 'SignupController::signup');
$routes->get('signup_success', 'SignupController::signupSuccess');

$routes->get('dashboard', 'Dashboard::index');
$routes->get('body', 'Dashboard::body');
$routes->get('admin', 'Dashboard::admin');
$routes->get('anggota', 'Dashboard::anggota');
$routes->get('buku', 'Dashboard::buku');
$routes->get('kategori', 'Dashboard::kategori');
$routes->get('peminjaman', 'Dashboard::peminjaman');
$routes->get('pengembalian', 'Dashboard::pengembalian');

$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/login', 'LoginController::doLogin');

$routes->get('upload', 'UploadController::index');
$routes->post('proses', 'UploadController::proses');
// $routes->post('upload/delete/(:num)', 'UploadController::delete/$1');
$routes->match(['get', 'post'], 'upload/delete/(:num)', 'UploadController::delete/$1');

$routes->get('/', 'ImageController::index');
$routes->post('destroy', 'ImageController::destroy');
$routes->group('image', function ($routes) {
    $routes->get('/', 'ImageController::index');
    $routes->get('create', 'ImageController::create'); //tambahkan kode ini
    $routes->post('/', 'ImageController::store'); //tambahkan kode ini
});

$routes->get('members', 'MemberController::index');
$routes->get('members/create', 'MemberController::create');
$routes->post('members/store', 'MemberController::store');
$routes->post('members/delete/(:num)', 'MemberController::delete/$1');

$routes->get('/books', 'Books::index');
$routes->get('/books/create', 'Books::create');
$routes->post('/books/store', 'Books::store');
$routes->get('/books/edit/(:num)', 'Books::edit/$1');
$routes->post('/books/update/(:num)', 'Books::update/$1');
$routes->get('/books/delete/(:num)', 'Books::delete/$1');

$routes->get('/borrows', 'Borrows::index');
$routes->get('/borrows/create', 'Borrows::create');
$routes->post('/borrows/store', 'Borrows::store');
$routes->get('/borrows/returnBook/(:num)', 'Borrows::returnBook/$1');

$routes->get('/loans', 'LoanController::index');
$routes->get('/loans/create', 'LoanController::create');
$routes->post('/loans/store', 'LoanController::store');
$routes->get('/loans/edit/(:num)', 'LoanController::edit/$1');
$routes->post('/loans/update', 'LoanController::update');
$routes->post('/loans/delete/(:num)', 'LoanController::delete/$1');
$routes->get('/loans/return/(:num)', 'LoanController::showReturnForm/$1');
$routes->post('/loans/return/(:num)', 'LoanController::returnBook/$1');


// app/Config/Routes.php






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
