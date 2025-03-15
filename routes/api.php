<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/hotels', [HotelController::class, 'indexAPI']);
Route::post('/hotels', [HotelController::class, 'storeAPI']);
Route::put('/hotels/{hotel}', [HotelController::class, 'updateAPI']);
Route::delete('/hotels/{hotel}', [HotelController::class, 'destroyAPI']);

Route::get('/rooms', [RoomController::class, 'indexAPI']);
Route::post('/rooms', [RoomController::class, 'storeAPI']);
