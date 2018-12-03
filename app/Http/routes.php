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

Route::group(['middleware' => 'subDomain'], function () {

// Admin Portal Routes
    if(subDomain() == env('ADMIN_SUB_DOMAIN')) {
        require_once __DIR__ . '/Routes/Admin/indexRoutes.php';
    }

});

Route::get('/', function () {
    return view('/Home/welcome');
});

Route::get('/home', function () {
    return view('/Customer/home');
});
Route::get('/tv-show', function () {
    return view('/Customer/tv-show');
});
Route::get('/movies', function () {
    return view('/Customer/movies');
});
Route::get('/recently', function () {
    return view('/Customer/recently');
});
Route::get('/list', function () {
    return view('/Customer/list');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('social/auth/redirect/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('social/auth/{provider}', 'Auth\AuthController@handleProviderCallback');
