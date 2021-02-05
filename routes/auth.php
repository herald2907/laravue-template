<?php

use App\Http\Controllers\Auth\LoginController;

Route::prefix('auth')->group(function () {

    Route::post('login', [LoginController::class, 'login'])->name('auth.login');
    // Route::patch('{id}/update', [CarsController::class, 'update'])->name('cars.update');
    // Route::get('', [CarsController::class, 'index'])->name('cars.index');
    // Route::get('{id}', [CarsController::class, 'show'])->name('cars.show');
    // Route::delete('{id}/destroy', [CarsController::class, 'destroy'])->name('cars.destroy');   
    // Route::patch('{id}/restore', [CarsController::class, 'restore'])->name('cars.restore');
   
});
