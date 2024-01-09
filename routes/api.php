<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsUserController;
use App\Http\Controllers\ActivitiesUserController;
use App\Http\Controllers\ContributorValidationController;
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

// User

//Activities 
Route::get('/activities/user', [ActivitiesUserController::class, 'index']);
Route::get('/activities/user/{id}', [ActivitiesUserController::class,'show']);

// News
Route::get('/news/user', [NewsUserController::class, 'index']);
Route::get('/news/user/{id}', [NewsUserController::class,'show']);

// login dan register menggunakan sanctum
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// autentikasi dengan sanctum
Route::middleware(['auth:sanctum'])->group(function () {



    Route::middleware('admin')->group(function () {
        // Routes that require admin role

        //Contributor Validation
        Route::get('/contributor/validation', [ContributorValidationController::class, 'index']);
        Route::put('/contributor/validation/{id}', [ContributorValidationController::class, 'update']);
    });


    //Manage Activities 
    Route::get('/activities', [ActivitiesController::class, 'index']);
    Route::post('/activities', [ActivitiesController::class,'store']);
    Route::get('/activities/{id}', [ActivitiesController::class,'show']);
    Route::put('/activities/{id}', [ActivitiesController::class, 'update']);
    Route::delete('/activities/{id}', [ActivitiesController::class, 'destroy']);


    //Manage News
    Route::get('/news', [NewsController::class, 'index']);
    Route::post('/news', [NewsController::class,'store']);
    Route::get('/news/{id}', [NewsController::class,'show']);
    Route::put('/news/{id}', [NewsController::class, 'update']);
    Route::delete('/news/{id}', [NewsController::class, 'destroy']);

});
