<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/admin/login', [AdminController::class, 'index']);
Route::get('/admin/breed/list/{all?}', [AdminController::class, 'breed']);
Route::match(['get', 'post'],'/admin/breed/edit/{id?}', [AdminController::class, 'breed_edit']);
Route::get('/admin/breed/delete/{id}', [AdminController::class, 'breed_delete']);


Route::get('/admin/puppies/list', [AdminController::class, 'puppies']);
Route::match(['get', 'post'],'/admin/puppies/edit/{id?}', [AdminController::class, 'puppies_edit']);
Route::get('/admin/puppies/delete/{id}', [AdminController::class, 'puppies_delete']);
