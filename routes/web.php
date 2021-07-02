<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'PagesController@about');
Route::get('/skill', 'PagesController@skill');
Route::get('/contact', 'PagesController@contact');
Route::get('/', 'PagesController@welcome');



Route::get('/contact', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');