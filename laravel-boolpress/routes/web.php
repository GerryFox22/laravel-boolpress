<?php

use App\Http\Controllers\MailController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')
->namespace('Admin')
->name('admin.')
->prefix('admin')
->group(function(){
    Route::resource('posts', PostController::class);
});


Route::get('/mail/create', 'MailController@create')->name('mail.create');
Route::post('/mail', 'MailController@store')->name('mail.store');
Route::get('/mail/thanks', 'MailController@thanks')->name('mail.thanks');

Route::namespace('Api')
->name('api.')
->prefix('api')
->group(function(){
    Route::resource('posts', PostController::class);
});

Route::get("{any?}", function (){
    return view ('welcome');
})->where ("any", ".*");