<?php

use App\Http\Controllers\DinnerController;

Route::get('/', [DinnerController::class, 'index']);
Route::get('/decide', [DinnerController::class, 'decide']);

