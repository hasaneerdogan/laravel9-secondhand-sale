<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as CategoryController;


//3- Call Controller***********Main Page*********************************
Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->name('admin.')->group(function (){
//*****************************************ADMIN PANEL ROOTES***********************************//
Route::get('/',[AdminHomeController::class,'index'])->name('index');
//*****************************************ADMIN CATEGORY ROOTES***********************************//

    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function (){
Route::get('/','index')->name('index');
Route::get('/create','create')->name('create');
Route::post('/store','store')->name('store');
Route::get('/edit/{id}','edit')->name('edit');
Route::post('/update/{id}','update')->name('update');
Route::get('/delete/{id}','destroy')->name('delete');
Route::get('/show/{id}','show')->name('show');
    });
});
