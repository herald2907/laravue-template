<?php

use App\Http\Controllers\UserController;

Route::prefix('user')->group(function () {

    Route::POST('store', [UserController::class, 'store'])->name('user.store');
    Route::patch('{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::get('', [UserController::class, 'index'])->name('user.index');
    Route::get('{id}', [UserController::class, 'show'])->name('user.show');
    Route::delete('{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');   
    Route::patch('{id}/restore', [UserController::class, 'restore'])->name('user.restore');
   
});
