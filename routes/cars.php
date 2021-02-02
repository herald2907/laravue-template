<?php

use App\Http\Controllers\CarsController;

Route::prefix('cars')->group(function () {

    Route::POST('store', [CarsController::class, 'store'])->name('cars.store');
    Route::patch('{id}/update', [CarsController::class, 'update'])->name('cars.update');
    Route::get('', [CarsController::class, 'index'])->name('cars.index');
    Route::get('{id}', [CarsController::class, 'show'])->name('cars.show');
    Route::delete('{id}/destroy', [CarsController::class, 'destroy'])->name('cars.destroy');   
    Route::patch('{id}/restore', [CarsController::class, 'restore'])->name('cars.restore');
   
});
