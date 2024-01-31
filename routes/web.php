<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
use App\Http\Middleware\RedirectIfAuthenticated;

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


Route::prefix('')->group(function () {
    Route::get('/', 'RecipesController@index')->name('index');

    Route::middleware([RedirectIfAuthenticated::class])->get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'loginUser'])->name('auth.login');
    Route::post('/logout', [AuthController::class, 'logoutFun'])->name('logout');

    Route::prefix('admin')->group(function () {
        Route::middleware('auth:sanctum')->group(function () {
            Route::get('/', 'RecipesController@adminIndex')->name('admin.index');
            Route::get('/create', 'RecipesController@create')->name('admin.create');
            Route::post('/create', 'RecipesController@store')->name('admin.store');
            Route::get('/edit/{id}', 'RecipesController@edit')->name('admin.edit');
            Route::put('/edit/{id}', 'RecipesController@update')->name('admin.update');
            Route::delete('/{id}', 'RecipesController@destroy')->name('admin.destroy');
        });
    });

    Route::get('/show/{id}', 'RecipesController@show');
});


Route::fallback(fn () => '404 page');
