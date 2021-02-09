<?php

use App\Http\Controllers\Auth\LoginController;

Route::prefix('auth')->group(function () {

    Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');
    
});
