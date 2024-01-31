<?php

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
    Route::get('/', [RecipesController::class, 'index']);

    Route::prefix('admin')->group(function () {
        Route::get('/', [RecipesController::class, 'adminIndex'])->name('admin.index');
        Route::get('/create', [RecipesController::class, 'create']);
        Route::post('/create', [RecipesController::class, 'store'])->name('recipes.store');
        Route::get('/edit/{id}', [RecipesController::class, 'edit'])->name('recipes.edit');
        Route::put('/edit/{id}', [RecipesController::class, 'update'])->name('recipes.update');
        Route::delete('/{id}', [RecipesController::class, 'destroy'])->name('recipes.destroy');
    });

    Route::get('/show/{id}', [RecipesController::class, 'show'])->name('recipes.show');
});






// Route::get('/admin', fn () => view('admin.index'));


// Route::controller(RecipesController::class)->group(function () {
//     Route::get('/', 'index');
//     Route::get('/admin', 'admin.index');
//     Route::get('/admin/create', 'create');
//     Route::post('/admin/create', 'store')->name('recipes.store');
//     Route::post('/admin/edit', 'edit')->name('recipes.edit');
//     Route::post('/admin/edit', 'update')->name('recipes.update');
//     Route::get('/show/{id}', 'show')->name('recipes.show');
//     Route::delete('admin/{id}', 'destroy')->name('recipes.destroy');
// });

// Route::fallback(function () {
//     return redirect('/');
// });
