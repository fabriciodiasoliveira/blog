<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/visit/post/{i}', [PostController::class, 'show'])->name('post.show.visit');
Route::get('carrousel', [PostController::class, 'carrousel'])->name('carrousel');

Route::group(["middleware" => 'auth'], function () {
    Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'], function() {
        Route::resource('user', UserController::class);
        Route::resource('post', PostController::class);
    });
});
