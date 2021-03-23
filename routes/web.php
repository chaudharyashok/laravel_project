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

Route::get('/homepage','App\Http\controllers\UserController@index')->name('homepage');
Route::get('/service','App\Http\controllers\UserController@service')->name('service');
Route::get('/about','App\Http\controllers\UserController@about')->name('about');
Route::get('/contact','App\Http\controllers\UserController@contact')->name('contact');
Route::get('/team','App\Http\controllers\UserController@team')->name('team');
Route::get('/blog','App\Http\controllers\UserController@blog')->name('blog');
Route::get('/pricing','App\Http\controllers\UserController@pricing')->name('pricing');
Route::get('/portfolio','App\Http\controllers\UserController@portfolio')->name('portfolio');

//route admincontrollers
Route::get('/admin/home','App\Http\controllers\AdminController@index')->name('admin.home');
Route::get('/admin/addcategory','App\Http\controllers\AdminController@addcategory')->name('admin.addcategory');
Route::get('/admin/addproduct','App\Http\controllers\AdminController@addproduct')->name('admin.addproduct');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


