<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsUserController;
use App\Http\Controllers\ActivitiesUserController;
use App\Http\Controllers\ContributorValidationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/activities', [ActivitiesUserController::class, 'index']);