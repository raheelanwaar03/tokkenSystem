<?php

use App\Http\Controllers\CounterController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;


Route::get('/', function () {
    return view('welcome');
});
//create group routing for user

Route::prefix('user/dashboard')->name('user.dashboard')->middleware(['auth','user'])->group(function () {

    Route::resource('index', userController::class);
    Route::resource('Department', DepartmentController::class);
    Route::resource('Counter', CounterController::class);

});

require __DIR__.'/auth.php';
