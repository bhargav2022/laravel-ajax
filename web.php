<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;

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
Route::any('/list',[App\Http\Controllers\productsController::class,'list'])->name('list');
Route::any('/create',[App\Http\Controllers\productsController::class,'create'])->name('create');
Route::any('/store',[App\Http\Controllers\productsController::class,'store'])->name('store');
//Route::resource('/products',[App\Http\Controllers\productController::class,'create']);
Route::get('prolist',[App\Http\Controllers\productsController::class,'prolist'])->name('prolist');;
