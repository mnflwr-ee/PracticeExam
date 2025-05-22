<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    //routes
    Route::get('employee', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
    
    Route::get('employee/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');

    Route::post('employee/create', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
    //edit
    Route::get('employee/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');

    Route::put('employee/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');

    route::get('employee/{id}/delete', [\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.delete');

    //Route::resource('employee', \App\Http\Controllers\EmployeeController::class);
});


