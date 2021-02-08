<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum','auth'])->group(function () {
    Route::post('/logout',[AuthController::class,'logout'])->name('api.logout');
    Route::get('dash',[AuthController::class,'dash'])->name('api.dash');

});

Route::get('/auth-check',[AuthController::class,'auth'])->name('api.auth');
Route::post('/login-test',[AuthController::class,'loginTest'])->name('api.login-test');


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

require __DIR__ . '/car.php';
require __DIR__ . '/user.php';
require __DIR__ . '/role.php';
require __DIR__ . '/auth.php';
