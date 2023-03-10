<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;

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

// Route::get('{any}', function () {
//     return view('welcome');
// })->where('any', '.*');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/blog/{slug}', [BlogController::class, 'blog_post'])->name('blog_post');
Route::get('/blog', [BlogController::class, 'blog_list'])->name('blog_list');

Route::prefix('admin')->group(function () {
    Route::match(['get', 'post'],'/login', [AdminController::class, 'index'])->name('admin_login');
        Route::middleware(['adminAuth'])->group(function () {
            Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
            Route::get('/breed/list/{all?}', [AdminController::class, 'breed'])->name('admin_breed_list');
            Route::match(['get', 'post'],'/breed/edit/{id?}', [AdminController::class, 'breed_edit'])->name('admin_breed_edit');
            Route::get('/breed/delete/{id}', [AdminController::class, 'breed_delete'])->name('admin_breed_delete');


            Route::get('/puppies/list', [AdminController::class, 'puppies'])->name('admin_puppies_list');
            Route::match(['get', 'post'],'/puppies/edit/{id?}', [AdminController::class, 'puppies_edit'])->name('admin_puppies_edit');
            Route::get('/puppies/delete/{id}', [AdminController::class, 'puppies_delete'])->name('admin_puppies_delete');

            /* Blog Routes*/ 
            Route::get('/blogs', [BlogController::class, 'blogs'])->name('admin_blogs');
            Route::match(['get', 'post'],'/blogs/edit/{id?}', [BlogController::class, 'blogs_edit'])->name('admin_blogs_edit');
            Route::get('/blogs/delete/{id}', [BlogController::class, 'blogs_delete'])->name('admin_blogs_delete');

            Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
            
        });
});
