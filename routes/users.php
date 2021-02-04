<?php

use App\Http\Controllers\UserController;

Route::prefix('users')->group(function () {

    Route::POST('store', [UserController::class, 'store'])->name('users.store');
    Route::patch('{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::get('', [UserController::class, 'index'])->name('users.index');
    Route::get('{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');   
    Route::patch('{id}/restore', [UserController::class, 'restore'])->name('users.restore');
   
});
