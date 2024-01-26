<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Front\ArticleController as FrontArticleController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\Front\HomeController::class, 'index']);

Route::get('/about',[App\Http\Controllers\Front\HomeController::class, 'about']);

Route::get('/contact',[ContactController::class, 'index']);

Route::get('/post/{slug}',[FrontArticleController::class, 'show']);

Route::get('/articles',[FrontArticleController::class, 'index']);

Route::post('/articles/search',[FrontArticleController::class, 'index'])->name('search');

Route::get('/category/{slug}',[FrontCategoryController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/article', ArticleController::class);

    Route::resource('/categories', CategoryController::class)->only(['index', 'store', 'update', 'destroy'])->middleware('UserAccess:1'); //1 adalah role admin 2 adalah role penulis 

    Route::resource('/users', UserController::class);

    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
