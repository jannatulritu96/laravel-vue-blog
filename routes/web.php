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
    return redirect()->route('/home');
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
    //Category

    Route::post('/add-category','CategoryController@add_category');
    Route::get('category','CategoryController@all_category');
    Route::get('category/{id}','CategoryController@delete_category');
    Route::get('editcategory/{id}','CategoryController@edit_category');
    Route::post('update-category/{id}','CategoryController@update_category');
    Route::get('/deletecategory/{id}','CategoryController@selected_category');

//Post
    Route::get('/post','PostController@all_Post');
    Route::post('/savepost','PostController@save_post');
    Route::get('/delete/{id}','PostController@delete_post');
    Route::get('/post/{id}','PostController@edit_post');
    Route::post('/update/{id}','PostController@update_post');


});