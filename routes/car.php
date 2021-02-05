<?php

use App\Http\Controllers\CarController;

Route::prefix('car')->group(function () {

    Route::POST('store', [CarController::class, 'store'])->name('car.store');
    Route::patch('{id}/update', [CarController::class, 'update'])->name('car.update');
    Route::get('', [CarController::class, 'index'])->name('car.index');
    Route::get('{id}', [CarController::class, 'show'])->name('car.show');
    Route::delete('{id}/destroy', [CarController::class, 'destroy'])->name('car.destroy');   
    Route::patch('{id}/restore', [CarController::class, 'restore'])->name('car.restore');
   
});
