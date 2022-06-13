<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\UserController;
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
Route::view('/loginuser','Myhome.login')->name('loginuser');
Route::view('/registeruser','Myhome.register')->name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin','Myadmin.login')->name('loginadmin');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');

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

Route::middleware('auth')->group(function() {
    Route::prefix('userpanel')->name('userpanel.')->group(function (){
        Route::get('/',[UserController::class,'index'])->name('index');
        Route::get('/reviews',[UserController::class,'reviews'])->name('reviews');
        Route::get('reviewdestroy/{id}',[UserController::class,'reviewdestroy'])->name('reviewdestroy');
        Route::get('/orders',[UserController::class,'orders'])->name('orders');
        Route::get('orderdetail/{id}',[UserController::class,'orderdetail'])->name('orderdetail');
        Route::get('cancelproduct/{id}',[UserController::class,'cancelproduct'])->name('cancelproduct');


    });

    //*****************************************Shopcart ROOT ***********************************//
    Route::prefix('shopcart')->name('shopcart.')->controller(ShopCartController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('delete');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::post('/order','order')->name('order');
        Route::post('/storeorder','storeorder')->name('storeorder');
        Route::get('/ordercomplete','ordercomplete')->name('ordercomplete');
    });


    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function (){

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

        Route::prefix('user')->name('user.')->controller(AdminUserController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
        });

        //*****************************************Order ROOT ***********************************//
        Route::prefix('order')->name('order.')->controller(OrderController::class)->group(function (){
            Route::get('/{slug}','index')->name('index');
            Route::get('/create','create')->name('create');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/delete/{id}','destroy')->name('delete');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/cancelorder/{id}','cancelorder')->name('cancelorder');
            Route::get('/cancelproduct/{id}','cancelproduct')->name('cancelproduct');
            Route::get('/acceptproduct/{id}','acceptproduct')->name('acceptproduct');
        });
    });
});
