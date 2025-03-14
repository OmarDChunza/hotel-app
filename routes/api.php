<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/hotels', [HotelController::class, 'index']);
Route::post('/hotels', [HotelController::class, 'store']);
Route::put('/hotels/{hotel}', [HotelController::class, 'update']);
Route::delete('/hotels/{hotel}', [HotelController::class, 'destroy']);

Route::post('/rooms', [RoomController::class, 'store']);

