<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PublisherController;
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
    return redirect('/home');
});

Route::get('/home', [BookController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/publishers', [PublisherController::class, 'view']);

Route::get('/detail/{id}', [DetailController::class, 'detail']);

Route::get('/publisher_detail/{id}' , [PublisherController::class, 'viewDetail']);

Route::get('/BookCategory/{id}' , [CategoryController::class, 'viewCategory']);


