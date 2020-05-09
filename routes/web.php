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
    return redirect()->route('/dashboard');
    })->name('home');
    
Auth::routes();


Route::GET('password-change', 'DashboardController@showResetForm')->name('password.change');
Route::POST('password-update', 'DashboardController@updatepassword')->name('update.password');

Auth::routes([
    'register' => true,
]);


Route::middleware('auth')->group(function (){
    // Dashboard
    Route::GET('/home','DashboardController@index')->name('dashboard');

});