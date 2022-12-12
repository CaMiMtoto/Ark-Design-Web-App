<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiriesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTypeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\EnsureIsActive;
use App\Http\Middleware\EnsurePasswordChanged;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/projects/{project}', [HomeController::class, 'projectDetails'])->name('project-details');
Route::post('/inquiry', [HomeController::class, 'saveInquiry'])->name('inquiry.save');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Auth::routes();


Route::group(['middleware' => ['auth', EnsureIsActive::class,], 'prefix' => '/admin', 'as' => 'admin.'], function () {

    Route::get('/change-password', [ResetPasswordController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [ResetPasswordController::class, 'updatePassword'])->name('update-password');

    Route::middleware([EnsurePasswordChanged::class])->group(function () {

        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');



        Route::get('/project/types', [ProjectTypeController::class, 'index'])->name('project-types.index');
        Route::post('/project/types', [ProjectTypeController::class, 'store'])->name('project-types.store');
        Route::get('/project/types/{projectType}/show', [ProjectTypeController::class, 'show'])->name('project-types.edit');
        Route::delete('/project/types/{projectType}', [ProjectTypeController::class, 'destroy'])->name('project-types.destroy');

        Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
        Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
        Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
        Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
        Route::post('/projects/{project}/images', [ProjectController::class, 'storeImages'])->name('projects.images.store');
        Route::delete('/projects/images/{image}/destroy', [ProjectController::class, 'destroyImage'])->name('projects.images.destroy');
        Route::get('/projects/{project}/images', [ProjectController::class, 'images'])->name('projects.images');


        Route::get('/events', [EventController::class, 'index'])->name('events.index');
        Route::post('/events', [EventController::class, 'store'])->name('events.store');
        Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
        Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

        Route::get('/users', [UsersController::class, 'index'])->name('users.index');
        Route::post('/users', [UsersController::class, 'store'])->name('users.store');
        Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');
        Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
        Route::get('/users/{user}/permissions', [UsersController::class, 'permissions'])->name('users.permissions');
        Route::post('/users/{user}/permissions', [UsersController::class, 'assignPermissions'])->name('users.permissions.store');
        Route::post('/users/{user}/change-status', [UsersController::class, 'toggleActive'])->name('users.active-toggle');

        Route::get('/permissions', [PermissionsController::class, 'index'])->name('permissions.index');

        Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
        Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
        Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
        Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');

        Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
        Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
        Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
        Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

        Route::get('/inquiries', [InquiriesController::class, 'index'])->name('inquiries.index');
        Route::delete('/inquiries/{inquiry}', [InquiriesController::class, 'destroy'])->name('inquiries.destroy');
    });
});
