<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
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
    Route::get('/', [RecipesController::class, 'index'])->name('display.index');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'loginUser'])->name('auth.login');
    Route::post('/logout', [AuthController::class, 'logoutFun'])->name('logout');

    Route::prefix('admin')->group(function () {
        Route::middleware('auth:sanctum')->group(function () {
            Route::get('/', [RecipesController::class, 'adminIndex'])->name('admin.index');
            Route::get('/create', [RecipesController::class, 'create']);
            Route::post('/create', [RecipesController::class, 'store'])->name('recipes.store');
            Route::get('/edit/{id}', [RecipesController::class, 'edit'])->name('recipes.edit');
            Route::put('/edit/{id}', [RecipesController::class, 'update'])->name('recipes.update');
            Route::delete('/{id}', [RecipesController::class, 'destroy'])->name('recipes.destroy');
        });
    });

    Route::get('/show/{id}', [RecipesController::class, 'show'])->name('recipes.show');
});
