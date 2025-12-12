<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\RecurringEventController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    Route::get('/events', [EventController::class, 'index']);
    Route::post('/events', [EventController::class, 'store']);
    Route::put('/events/{id}', [EventController::class, 'update']);
    Route::delete('/events/{id}', [EventController::class, 'destroy']);
});

Route::middleware('api')->group(function () {
    Route::get('/recurringEvents', [RecurringEventController::class, 'index']);
    Route::post('/recurringEvents', [RecurringEventController::class, 'store']);
    Route::put('/recurringEvents/{id}', [RecurringEventController::class, 'update']);
    Route::delete('/recurringEvents/{id}', [RecurringEventController::class, 'destroy']);
});
