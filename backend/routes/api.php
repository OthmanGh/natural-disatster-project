<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\EmailController;
=======
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\NaturalDisasterController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\DangerZoneController;
>>>>>>> 9ac8b95c2845ef59be26289477c3f4c1e3f2988f

Route::get('/guests', [GuestController::class, 'index']);
Route::post('/guests', [GuestController::class, 'store']);
Route::get('/guests/{id}', [GuestController::class, 'show']);
Route::put('/guests/{id}', [GuestController::class, 'update']);
Route::delete('/guests/{id}', [GuestController::class, 'destroy']);

<<<<<<< HEAD
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/send-welcome-email', [EmailController::class, 'sendWelcomeEmail']);
=======
Route::get('/locations', [LocationController::class, 'index']);
Route::post('/locations', [LocationController::class, 'store']);
Route::get('/locations/{id}', [LocationController::class, 'show']);
Route::put('/locations/{id}', [LocationController::class, 'update']);
Route::delete('/locations/{id}', [LocationController::class, 'destroy']);

Route::get('/natural-disasters', [NaturalDisasterController::class, 'index']);
Route::post('/natural-disasters', [NaturalDisasterController::class, 'store']);
Route::get('/natural-disasters/{id}', [NaturalDisasterController::class, 'show']);
Route::put('/natural-disasters/{id}', [NaturalDisasterController::class, 'update']);
Route::delete('/natural-disasters/{id}', [NaturalDisasterController::class, 'destroy']);

Route::get('/alerts', [AlertController::class, 'index']);
Route::post('/alerts', [AlertController::class, 'store']);
Route::get('/alerts/{id}', [AlertController::class, 'show']);
Route::put('/alerts/{id}', [AlertController::class, 'update']);
Route::delete('/alerts/{id}', [AlertController::class, 'destroy']);

Route::get('/shelters', [ShelterController::class, 'index']);
Route::post('/shelters', [ShelterController::class, 'store']);
Route::get('/shelters/{id}', [ShelterController::class, 'show']);
Route::put('/shelters/{id}', [ShelterController::class, 'update']);
Route::delete('/shelters/{id}', [ShelterController::class, 'destroy']);

Route::get('/danger-zones', [DangerZoneController::class, 'index']);
Route::post('/danger-zones', [DangerZoneController::class, 'store']);
Route::get('/danger-zones/{id}', [DangerZoneController::class, 'show']);
Route::put('/danger-zones/{id}', [DangerZoneController::class, 'update']);
Route::delete('/danger-zones/{id}', [DangerZoneController::class, 'destroy']);
>>>>>>> 9ac8b95c2845ef59be26289477c3f4c1e3f2988f
