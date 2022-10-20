<?php

use App\Http\Controllers\Listing_controller;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//All listings
Route::get('/', [Listing_controller::class, 'index']);

//Show Create Form
Route::get('/listings/create', [Listing_controller::class, 'create'])->middleware('auth');

Route::post('/listings', [Listing_controller::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [Listing_controller::class, 'edit']);

//update Listing
Route::put('/listings/{listing}', [Listing_controller::class, 'update']);

//Delete Listing
Route::delete('/listings/{listing}', [Listing_controller::class, 'destroy']);

//single listing
Route::get('/listings/{listing}', [Listing_controller::class, 'show']);

//Show Register/ Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New user
Route::post('/users', [UserController::class, 'store']);

//logout User
Route::get('/logout', [UserController::class, 'logout']);

// login Form
Route::get('/login', [UserController::class, 'login']);

// login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
