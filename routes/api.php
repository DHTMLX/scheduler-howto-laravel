<?php

use Illuminate\Http\Request;

Route::resource('events', 'EventController');
Route::resource('recurringEvents', 'RecurringEventController');