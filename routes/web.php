<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as CategoryController;


//3- Call Controller***********Main Page*********************************
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('faq',[HomeController::class,'faq'])->name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('storecomment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/product/{id}',[HomeController::class,'product'])->name('product');
Route::get('home/product/{id}',[HomeController::class,'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}',[HomeController::class,'categoryproducts'])->name('categoryproducts');



Route::prefix('admin')->name('admin.')->group(function (){

//*****************************************ADMIN PANEL ROOT ***********************************//
    Route::get('/',[AdminHomeController::class,'index'])->name('index');

    //*****************************************General Routes ***********************************//
    Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
    Route::post('/setting',[AdminHomeController::class,'settingupdate1'])->name('setting.update');


    //*****************************************ADMIN CATEGORY ROOT ***********************************//


    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('delete');
        Route::get('/show/{id}','show')->name('show');
    });


    //*****************************************ADMIN PRODUCT ROOT ***********************************//

    Route::prefix('product')->name('product.')->controller(AdminProductController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('delete');
        Route::get('/show/{id}','show')->name('show');
    });

    //*****************************************ADMIN PRODUCT IMAGE GALERY ROOT ***********************************//

    Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function (){
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/delete/{pid}/{id}','destroy')->name('delete');
    });

    Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
    //*****************************************faq ROOT ***********************************//
    Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('delete');
        Route::get('/show/{id}','show')->name('show');
    });
    Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });
});
