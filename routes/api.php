<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::post('/user', [UserController::class, 'insert']);

Route::get('/addresses', [AdressController::class, 'index']);
Route::post('/addresses', [AdressController::class, 'insert']);
Route::get('/addresses/{id}', [AdressController::class, 'findOne']);
