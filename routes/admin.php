<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SedeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PuestoController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;



Route::get( '', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');


Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->names('users');

Route::resource('categories', CategoryController::class)->names('categories');


Route::resource('/puestos',PuestoController::class);
Route::resource('/sedes',SedeController::class);
Route::resource('/areas',AreaController::class);

Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('courses/{course}',[CourseController::class, 'show'])->name('courses.show');

Route::post('courses/{course}/approved',[CourseController::class, 'approved'])->name('courses.approved');

