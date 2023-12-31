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
Route::middleware(['auth'])->group(function () {
Route::get('admin/home','Admin\DashboardController@index')->name('admin.home');

Route::get('pratos/index','Admin\FoodController@index')->name('food.index');
Route::get('pratos/create','Admin\FoodController@create')->name('food.create');
});
