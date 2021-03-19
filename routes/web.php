<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ecoController;

use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandsController;

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



    Route::get('/', [ecoController::class,'index'])->name('index');
    Route::get('/Product', [ecoController::class,'products'])->name('Products');
    Route::get('/Product/{slug}', [ecoController::class,'show'])->name('Products.show');
    Route::get('/new/search', [ecoController::class,'search'])->name('search');

    
    ///// Cart Area /////////
    Route::post('/addToCart', [CartController::class,'addToCart'])->name('addToCart');
    Route::get('/viewcart', [CartController::class,'index']);
    Route::get('/cart/deleteItem/{id}', [CartController::class,'deleteItem']);
    Route::get('/cart/update-quantity/{id}/{quantity}', [CartController::class,'updateQuantity']);


    Route::get('/check-out', [CheckOutController::class,'index']);
    Route::post('/submit-checkout', [CheckOutController::class, 'submitcheckout']);
    Route::get('/order-review',[OrdersController::class, 'index']);
    Route::post('/submit-order', [OrdersController::class, 'order']);
    Route::get('/cod', [OrdersController::class, 'cod']);


        // Admin Routes

    Route::group(['prefix' => 'admin'], function(){
        Route::get('/', [AdminPagesController::class,'index'])->name('admin.index');

        //  Product Routes
        Route::group(['prefix' => '/products'], function(){
            Route::get('/', [AdminProductController::class,'index'])->name('admin.products');
            Route::get('/create', [AdminProductController::class,'create'])->name('admin.product.create');
            Route::get('/edit/{para}', [AdminProductController::class,'edit'])->name('admin.product.edit');
            
            Route::POST('/store', [AdminProductController::class,'store'])->name('admin.product.store');
            Route::POST('/product/edit/{para}', [AdminProductController::class,'update'])->name('admin.product.update');
            Route::POST('/product/delete/{para}', [AdminProductController::class,'delete'])->name('admin.product.delete');
        });
    
        //  Category Routes
        Route::group(['prefix' => '/categories'], function(){
            Route::get('/', [CategoryController::class,'index'])->name('admin.categories');
            Route::get('/create', [CategoryController::class,'create'])->name('admin.category.create');
            Route::get('/edit/{para}', [CategoryController::class,'edit'])->name('admin.category.edit');
            
            Route::POST('/store', [CategoryController::class,'store'])->name('admin.category.store');
            Route::POST('/category/edit/{para}', [CategoryController::class,'update'])->name('admin.category.update');
            Route::POST('/category/delete/{para}', [CategoryController::class,'delete'])->name('admin.category.delete');
        });
  
    });

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
