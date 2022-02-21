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


//Route::get('/', function () {
//   return view('welcome');
//});
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;

Route::get('/home', [HomeController::class, 'home']);

Route::prefix('category')->group(function () {
    Route::get('/marbeledugames', [ProductsController::class, 'marbeledugames']);
    Route::get('/marbelandfriendskidsgames', [ProductsController::class, 'marbelandfriendskidsgames']);
    Route::get('/riristorybooks', [ProductsController::class, 'riristorybooks']);
    Route::get('/kolakkidssongs', [ProductsController::class, 'kolakkidssongs']);
});

Route::get('/news/{id}', [HalamanController::class, 'berita']);


Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjunganindustri', [ProgramController::class, 'kunjunganindustri']);
});

Route::get('/aboutus', [AboutController::class, 'about']);

use App\Http\Controllers\ContactController;

Route::resource('contactus', ContactController::class);