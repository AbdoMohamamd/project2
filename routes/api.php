<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PassengerContoller;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// public routes
// Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::post('/users', [UserController::class, 'store']);
    Route::get('/users/search/{name}', [UserController::class, 'search']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);


    Route::post('/passengers', [PassengerContoller::class, 'store']);
    Route::put('/passengers/{id}', [PassengerContoller::class, 'update']);
    Route::delete('/passengers/{id}', [PassengerContoller::class, 'destroy']);
    Route::get('/passengers', [PassengerContoller::class, 'index']);
    Route::get('/passengers/{id}', [PassengerContoller::class, 'show']);
    Route::get('/passengers/search/{name}', [PassengerContoller::class, 'search']);



    Route::get('/flights', [FlightController::class, 'index']);
    Route::get('/flights/{id}', [FlightController::class, 'show']);
    Route::post('/flights/search', [FlightController::class, 'search']);
    Route::post('/flights', [FlightController::class, 'store']);
    Route::put('/flights/{id}', [FlightController::class, 'update']);
    Route::delete('/flights/{id}', [FlightController::class, 'destroy']);
      


    Route::post('/logout', [AuthController::class, 'logout']);

});
