<?php

use App\Http\Controllers\ActivitiesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContributorValidationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserActivitiesController;
use App\Http\Controllers\UserNewsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [UserActivitiesController::class, 'home'])->name('homepage');


Route::get('/user/login', [AuthController::class, 'indexLogin'])->name('index.login');
Route::post('/user/login/post', [AuthController::class, 'login'])->name('login');
Route::get('/user/register', [AuthController::class, 'indexRegister'])->name('index.register');
Route::post('/user/register/post', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/user/activities', [UserActivitiesController::class, 'index'])->name('user.activities');
Route::get('/user/activities/show/{id}', [UserActivitiesController::class, 'show'])->name('user.activities.show');
Route::get('/user/news', [UserNewsController::class, 'index'])->name('user.news');
Route::get('/user/news/show/{id}', [UserNewsController::class, 'show'])->name('user.news.show');







Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/admin/dashboard', [ActivitiesController::class, 'indexDashboard'])->name('admin.dashboard');


    Route::get('/admin/activities', [ActivitiesController::class, 'index'])->name('admin.activities');
    Route::get('/admin/activities/create', [ActivitiesController::class, 'create'])->name('admin.activities.create');
    Route::post('/admin/activities/store', [ActivitiesController::class, 'store'])->name('admin.activities.store');
    Route::get('/admin/activities/edit/{id}', [ActivitiesController::class, 'edit'])->name('admin.activities.edit');
    Route::put('/admin/activities/update/{id}', [ActivitiesController::class, 'update'])->name('admin.activities.update');
    Route::delete('/admin/activities/delete/{id}', [ActivitiesController::class, 'destroy'])->name('admin.activities.delete');



    Route::middleware('admin')->group(function () {

        Route::get('/admin/news', [NewsController::class, 'index'])->name('admin.news');
        Route::get('/admin/news/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/admin/news/store', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::put('/admin/news/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::delete('/admin/news/delete/{id}', [NewsController::class, 'destroy'])->name('admin.news.delete');
    
    
        Route::get('/admin/validation', [ContributorValidationController::class, 'index'])->name('admin.validation');
        Route::post('/admin/validation/accepted/{id}', [ContributorValidationController::class, 'updateAccepted'])->name('admin.validation.accepted');
        Route::post('/admin/validation/rejected/{id}', [ContributorValidationController::class, 'updateRejected'])->name('admin.validation.rejected');

    });

});