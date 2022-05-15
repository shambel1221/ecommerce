<?php

use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\productcontroller;

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
Route::get('/product/register', [productController::class, 'register'])->name('product/register');
Route::post('/product/register', [productController::class, 'store'])->name('product/register');


//Auth::routes();
Route::get('/home', [App\Http\controllers\HomeControllers ::class, 'index'])->name('home');
Route::get('/product/list', [productController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [productController::class, 'edit']);
Route::post('/product/update',[productController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [productController::class, 'delete']);
Route::get('/product/search/{id}', [productController::class, 'search'])->name('product/search');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
