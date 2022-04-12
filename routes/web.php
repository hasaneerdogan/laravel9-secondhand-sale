<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// 1-write in route
Route::get('/hello', function () {
    return 'Hello World';
});
// 2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});
//3- Call Controller
Route::get('/',[HomeController::class,'index'])->name('home');

//4- Route -> Controller -> View
Route::get('/test',[HomeController::class,'test'])->name('test');

//5- Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//6- Route with parameters
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
