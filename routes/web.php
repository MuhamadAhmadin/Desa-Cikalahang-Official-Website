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

Route::get('/berita', [FrontPageController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [FrontPageController::class, 'berita_show'])->name('berita.show');
Route::get('/kategori/{slug}', [FrontPageController::class, 'berita_kategori_list'])->name('berita_kategori.list');
Route::post('/berita_search', [FrontPageController::class, 'berita_search'])->name('berita.search');
Route::get('/galeri', [FrontPageController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [FrontPageController::class, 'kontak'])->name('kontak');
Route::get('page/{slug}', [FrontPageController::class, 'page_single'])->name('page_single');
Route::get('/page/{slug}', [FrontPageController::class, 'page_show'])->name('page.show');

// Dashboard untuk semua role setelah authenticated
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth']], function () {
    // index dashboard
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::resources([
        // Master Data
        'menu' => App\Http\Controllers\MenuController::class,
        'sub_menu' => App\Http\Controllers\SubMenuController::class,
        'kategori' => App\Http\Controllers\KategoriController::class,
        'user' => App\Http\Controllers\UserController::class,
    ]);

    // Route resources
    Route::resources([
        'berita' => App\Http\Controllers\BeritaController::class,
        'galeri' => App\Http\Controllers\GaleriController::class,
        'page' => App\Http\Controllers\PageController::class,
        'slider' => App\Http\Controllers\SliderController::class,
    ]);

    // Route untuk profil akun
    Route::get('profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::put('profile', [App\Http\Controllers\UserController::class, 'profile_update'])->name('user.profile_update');
});

require __DIR__.'/auth.php';
