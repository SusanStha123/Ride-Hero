<?php

use App\Http\Controllers\Admin\AdminDriverController;
use App\Http\Controllers\Admin\AdminFeedbackController;
use App\Http\Controllers\Admin\AdminPassengerController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Driver\KycController;
use App\Http\Controllers\Driver\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Start Auth

// post login
Route::post('/login',[AuthController::class,'login']);
// post register
Route::post('/register',[AuthController::class,'register']);
// logout
Route::get('/logout',[AuthController::class,'logout']);

// End Auth

// Start Admin

// get-passengers
Route::get('/get-passengers',[AdminPassengerController::class,'getPassengers']);
// get-drivers
Route::get('/get-drivers',[AdminDriverController::class,'getDrivers']);
// get-feedback
Route::get('/get-feedbacks',[AdminFeedbackController::class,'getFeedbacks']);

// End Admin

// Start Contact

// post contact
Route::post('/contact',[ContactController::class,'contact']);
// End Contact

// Start Driver

// add vehicle
Route::post('/add-vehicle',[VehicleController::class,'addVehicle']);
// get vehicle
Route::get('/get-vehicles',[VehicleController::class,'getVehicles']);
// post kyc
Route::post('/add-kyc',[KycController::class,'addKyc']);
// End Driver
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
