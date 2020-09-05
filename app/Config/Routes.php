<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// controller home method index
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pages::index');
$routes->get('/coba/index', 'CobaController::index');
$routes->get('/coba/about', 'CobaController::about');
$routes->get('/coba/(:any)/(:any)', 'CobaController::about/$1/$2');
$routes->get('/users', 'Admin\Users::index');
// $routes->get('/pages/contact', 'Admin\Users::index');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/login/(:any)/(:any)','LoginController::index/$1/$2');
$routes->get('/login/','LoginController::index');
$routes->get('/komik/create','Komik::create');
$routes->get('/komik/edit/(:segment)','Komik::edit/$1');
$routes->delete('/komik/(:num)','Komik::delete/$1');
// $routes->get('/komik/(:segment)','Komik::detail/$1');
$routes->get('/komik/(:any)','Komik::detail/$1');

// $routes->get('/coba', 'CobaController::about');
// $routes->get('/fun', function(){
// 	echo "ini pake function";
// });
// method request sesuaikan kalo ambil data jadi post kalo hapus jadi del

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}