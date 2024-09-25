<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create',[EventController::class, 'criar']);

Route::post('/events',[EventController::class, 'store']);


