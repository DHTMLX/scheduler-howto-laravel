<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/scheduler', function () {
    return view('scheduler');
});

Route::get('/recurring_events', function () {
    return view('recurring_events');
});