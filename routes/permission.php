<?php

use App\Http\Controllers\PermissionController;

Route::prefix('permission')->group(function () {

    Route::POST('store', [PermissionController::class, 'store'])->name('permission.store');
    Route::patch('{id}/update', [PermissionController::class, 'update'])->name('permission.update');
    Route::get('', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('{id}', [PermissionController::class, 'show'])->name('permission.show');
    Route::delete('{id}/destroy', [PermissionController::class, 'destroy'])->name('permission.destroy');   
    Route::patch('{id}/restore', [PermissionController::class, 'restore'])->name('permission.restore');
   
});
