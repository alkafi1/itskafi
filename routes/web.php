<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FindController;

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
Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Frontend
Route::get('/', [FrontController::class, 'index']);

//user info
Route::get('/users', [UserController::class, 'index'])->name('user');
Route::get('/users/update/{user_id}', [UserController::class, 'user_update'])->name('user.update');
Route::post('/users/update/', [UserController::class, 'update_post'])->name('update.post');
Route::get('/users/delete/{user_id}', [UserController::class, 'user_delete'])->name('user.delete');


//banner
Route::get('/banner', [BannerController::class, 'index'])->name('banner');
Route::get('/banner/create', [BannerController::class, 'banner_create'])->name('banner.create');
Route::post('/banner/create/post', [BannerController::class, 'banner_create_post'])->name('banner.create.post');
Route::post('/banner/image/post', [BannerController::class, 'banner_image_post'])->name('banner.image.post');
Route::get('/banner/status/{banner_id}', [BannerController::class, 'status'])->name('status');
Route::get('/banner/image/status/{banner_id}', [BannerController::class, 'image_status'])->name('image.status');
Route::get('/banner/delete/{banner_id}', [BannerController::class, 'banner_delete'])->name('banner.delete');
Route::get('/banner/image/delete/{banner_id}', [BannerController::class, 'banner_image_delete'])->name('banner.image.delete');

//find me
Route::get('/findme', [FindController::class, 'index'])->name('findme');

