<?php

use App\Http\Controllers\RoleController;

Route::prefix('role')->group(function () {

    Route::POST('store', [RoleController::class, 'store'])->name('role.store');
    Route::patch('{id}/update', [RoleController::class, 'update'])->name('role.update');
    Route::get('', [RoleController::class, 'index'])->name('role.index');
    Route::get('{id}', [RoleController::class, 'show'])->name('role.show');
    Route::delete('{id}/destroy', [RoleController::class, 'destroy'])->name('role.destroy');   
    Route::patch('{id}/restore', [RoleController::class, 'restore'])->name('role.restore');
   
});
