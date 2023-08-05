<?php

use App\Models\Category;
use App\Http\Controllers\Cart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Main;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts2Controller;
use App\Http\Controllers\CusUserController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ElectronicController;
use App\Http\Controllers\SubcatagoriesController;
use App\Http\Controllers\frontend\JewelleryController;
use App\Http\Controllers\ElectronicController as ControllersElectronicController;
use App\Http\Controllers\ProductsController;
use Illuminate\Auth\Events\Login;
use App\Http\Middleware\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
// return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     Route::resource('dashboard/fashion',FashionController::class);

// });



Route::group(['prefix' => '/'], function () {
    Route::get('/', [ProductsController::class, 'login']);
    Route::post('/', [ProductsController::class, 'userlogin']);

    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', [ProductsController::class, 'dashboard']);
    });
});





Route::get('/sammob', function() {
    return view('sammob');
});

Route::resource('posts',PostController::class);
Route::resource('posts2',Posts2Controller::class);
Route::resource('dashboard/fashion',FashionController::class);
Route::resource('dashboard/electronic',ControllersElectronicController::class);
Route::resource('category',CategoryController::class);
Route::resource('sidebar',SidebarController::class);
Route::resource('/user/register',CusUserController::class);
Route::get('index/register',[CusUserController::class,'show'])->name('index.register');

Route::get('index',[SubcatagoriesController::class,'getCategories']);
Route::get('index/getSubcatagories/{id}',[SubcatagoriesController::class,'getSubcatagories']);
Route::get('/index',[Main::class,'Index'])->name('index');



//  Route::get('/dashboard',[SidebarController::class,'getCategories']);
//  Route::get('/dashboard/getSubcatagories/{id}',[SidebarController::class,'getSubcatagories']);


// Route::get('fashion/details/{id}',[FashionController::class,'details']);

// Route::get('/electronic',[ElectronicController::class,'Index']);


Route::get('/fashion',[FashionController::class,'ndex']);
Route::get('/fashion/{id}',[FashionController::class,'details'])->name('fashion');
Route::get('/electronic',[ElectronicController::class,'ndex']);
Route::get('/electronic/{id}',[ElectronicController::class,'details'])->name('electronic');
Route::get('/jewellery',[JewelleryController::class,'Index']);


// Route::get('/get_category',[CategoryController::class,'get_category']);

Route::get('cart',[Cart::class,'addtoCart'])->name('cart');
Route::get('/test',[CategoryController::class,'test']);


// Route::post('/store',[CartController::class,'store'])->name('cart.store');
// Route::post('/add-to-cart/{id}', [Cart::class, 'addtoCart'])->name('cart.add');
// Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');




Route::post('/add/cart/{id}', [Cart::class, 'addToCart'])->name('add.cart');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
// routes/web.php
Route::delete('/cart/{productId}', [CartController::class,'removeFromCart'])->name('cart.remove');




// Route::delete('/cart/{product_id}', [CartController::class, 'removeFromCart'])->name('cart.remove');




// Route::get('index/login', [LoginController::class, 'showLoginForm'])->name('userlogin');
// Route::post('index/login', [LoginController::class, 'userlogin']);
// Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
// Route::get('logout',[LoginController::class,'logout']);
require __DIR__.'/auth.php';
