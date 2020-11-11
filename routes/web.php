<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Blade and View - Display data
// Route::get('/', function () {
//     return view('welcome');
// });

// Echo example
// Route::get('/about', function () {
//     echo "hello mario world!";
// });

// Controllers - Manipulating Data
// To generate controller - In Terminal, (stop server) run: php artisan make:controller NAMEOFCONTROLLER (ie.HomeController)

// View/Get Home Route
Route::get('/', 'HomeController@index');

// View/Get Create Route
Route::get('/create', 'BlogController@view');

// View/Get Blog by ID
Route::get('/blog/{id}', 'BlogController@viewByID');

// Post Blog
Route::post('/create', 'BlogController@create');
