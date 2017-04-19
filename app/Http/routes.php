<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('auth.userLogin');
    return view('auth.login');
});

Route::post('/users/doLogin', [
    'uses' => 'UsersController@doLogin'
]);

Route::post('/search/getresults', [
    'uses' => 'SearchController@getresults'
]);


Route::get('/about', [
    'uses' => 'AdminController@aboutus'
]);


Route::get('/contact', function () {
    return view('auth.contactus');
});

Route::post('/contact', function () {
    return view('auth.contactus');
});


Route::post('/users/doLogin', [
    'uses' => 'UsersController@doLogin'
]);

/*Route::post('users/doLogin', function () {
    return view('users.dashboard');
});*/

/*Ticketing routes*/
Route::get('/tickets/login', function () {
    return view('tickets.userLogin');
});


/*Branding routes*/
Route::get('/brands/login', function () {
    return view('brands.userLogin');
});

/*admin section*/
Route::get('/admin', function () {
    return view('admin.login');
});
Route::post('/admin/login', [
    'uses' => 'AdminController@login'
]);

Route::post('/admin/save_aboutus', [
    'uses' => 'AdminController@save_aboutus'
]);