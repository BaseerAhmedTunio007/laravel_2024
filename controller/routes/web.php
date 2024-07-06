<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\testing;


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


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'showUser')->name('home');
    Route::get('/user/{id}', 'user')->name('user');
    Route::get('/blog', 'blog')->name('blog');
});
//  fist way simple 
// Route::get('/', [PageController::class, 'showUser'])->name('home');
// Route::get('/user/{id}' , [PageController::class, 'user'])->name('user');
// Route::get('/blog', [PageController::class, 'Blog'])->name('blog');



// Single action controller  

Route::get('/test' , testing::class);