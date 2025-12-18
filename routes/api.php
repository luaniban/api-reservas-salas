<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ResourceController;
use App\Http\Controllers\Api\V1\ReservationController;



Route::prefix('v1')->group(function () {
    Route::apiResource('/reservations', ReservationController::class);
});

Route::prefix('v1')->group(function () {
    Route::apiResource('/resources', ResourceController::class);
});