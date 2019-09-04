<?php

use Illuminate\Support\Facades\Log;
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
    //Log::info('A user has arrived at the welcome page.');
    //Log::channel('slack')->info('This is an informative Slack message.');
    //Log::stack(['single', 'email'])->critical('I need ice-cream!');
    Log::alert('This page was loaded', ['user' => 3, 'previous_page' => 'www.google.com']);
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::resource('users', 'UserController');

Route::get('notify/index', 'NotificationController@index');

/*
*|--------------------------------------------------------------------------
*| 广播
*|--------------------------------------------------------------------------
*/
Route::get('message/index', 'MessageController@index');
Route::get('message/send', 'MessageController@send');
