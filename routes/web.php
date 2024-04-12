<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PassengerContoller;
use App\Http\Controllers\UserController;
use App\Models\Passenger;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home page

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/logout', [AuthController::class, 'logout']);
// Route::get('/',[Controller::class,'index'])->middleware('auth:sanctum');
// //show users list
// Route::get('/users/show', [UserController::class, 'showList']);

// //show user create form
// Route::get('/users/create', [UserController::class, 'create']);

// //to store the user in the database
// Route::post('/users/store', [UserController::class, 'store']);

// //show user update form 
// Route::get('/users/{user}/update', [UserController::class, 'update']);

// //store change for the user
// Route::put('users/{user}/change', [UserController::class, 'change']);

// //soft delete the user
// Route::get('/users/{id}/destroy', [UserController::class, 'destroy']);

// //restore the deleted user
// Route::get('/users/{id}/restore', [UserController::class, 'restore']);

// //show passengers
// Route::get('passengers/show', [PassengerContoller::class, 'show']);

// //delete a passenger
// Route::get('passengers/{id}/delete', [PassengerContoller::class, 'delete']);

// //show passenger udpate method 
// Route::get('passengers/{passenger}/update', [PassengerContoller::class, 'update']);


// //store changes to the passenger
// Route::put('passengers/{passenger}/change', [PassengerContoller::class, 'change']);

// Route::get('passengers/create', [PassengerContoller::class, 'create']);

// Route::post('passengers/store', [PassengerContoller::class, 'store']);

// Route::get('flights/show', [FlightController::class, 'show']);

// Route::get('flights/{flight}/delete', [FlightController::class, 'delete']);

// Route::get('flights/create', [FlightController::class, 'create']);

// Route::post('flights/store', [FlightController::class, 'store']);

// Route::get('flights/{flight}/update', [FlightController::class, 'update']);

// Route::put('flights/{flight}/change', [FlightController::class, 'change']);
