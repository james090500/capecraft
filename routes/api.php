<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BanController;
use App\Http\Controllers\Admin\AccountController;

use App\Http\Controllers\ServerController;
use App\Http\Controllers\StaffController;

/**
 * /admin endpoints
 */
Route::group(['prefix' => '/admin', 'middleware' => 'auth:sanctum'], function() {
    Route::get('/init', [ AdminController::class, 'getInit']);
    Route::post('/login', [AccountController::class, 'doLogin'])->withoutMiddleware('auth:sanctum');

    Route::group(['prefix' => '/bans'], function() {
        Route::get('/', [ BanController::class, 'getBans']);
    });
});

Route::get('/server', [ ServerController::class, 'getServer' ]);
Route::get('/staff', [ StaffController::class, 'getStaff' ]);