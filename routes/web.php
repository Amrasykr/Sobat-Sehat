<?php

use App\Http\Controllers\ActivitiesController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');




Route::get('/admin/dashboard', [ActivitiesController::class, 'index'])->name('dashboard');
Route::get('/admin/activities', [ActivitiesController::class, 'index'])->name('activities.index');
Route::post('/admin/activities', [ActivitiesController::class, 'store'])->name('activities.store');
Route::get('/admin/activities/create', [ActivitiesController::class, 'create'])->name('activities.create');
