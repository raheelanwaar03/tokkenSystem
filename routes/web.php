<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;


Route::get('/', function () {
    return view('welcome');
});
//create group routing for user

Route::prefix('user/dashboard')->name('user.dashboard')->middleware(['auth','user'])->group(function () {

    Route::resource('index', userController::class);

});

require __DIR__.'/auth.php';
