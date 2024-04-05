<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'show']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/store', [UserController::class, 'store']);
Route::get('/users/{id}/read', [UserController::class, 'read']);
Route::get('/users/{user}/update', [UserController::class, 'update']);
Route::get('/users/{id}/destroy', [UserController::class, 'destroy']);
Route::get('/users/{id}/restore', [UserController::class, 'restore']);
