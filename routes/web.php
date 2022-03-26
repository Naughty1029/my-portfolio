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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::namespace('Admin')->prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('dashboard',"AdminController@dashboard")->name('dashboard');
    Route::get('create',"AdminController@create")->name('create');
    Route::post('store',"AdminController@store")->name('store');
    Route::get('edit/{id}',"AdminController@edit")->name('edit');
    Route::post('update/{id}',"AdminController@update")->name('update');
    Route::post('destroy/{id}',"AdminController@destroy")->name('destroy');

    Route::get('category/dashboard',"CategoryController@dashboard")->name('category.dashboard');
    Route::get('category/create',"CategoryController@create")->name('category.create');
    Route::post('category/store',"CategoryController@store")->name('category.store');
    Route::get('category/edit/{id}',"CategoryController@edit")->name('category.edit');
    Route::post('category/update/{id}',"CategoryController@update")->name('category.update');
    Route::post('category/destroy/{id}',"CategoryController@destroy")->name('category.destroy');
});

require __DIR__.'/auth.php';

Route::get('{all}', function () {
    return view('index');
})->where(["all" => ".*"]);
