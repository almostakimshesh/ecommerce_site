<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Main;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts2Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontend\FashionController;
use App\Http\Controllers\frontend\JewelleryController;
use App\Http\Controllers\frontend\ElectronicController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\SubcatagoriesController;
use App\Models\Category;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/calendar', function() {
    return view('calendar');
});
Route::get('/map', function() {
    return view('map');
});


Route::get('/walmob', function() {
    return view('walmob');
});
Route::get('/samtv', function() {
    return view('samtv');
});
Route::get('/sammob', function() {
    return view('sammob');
});

// Route::get('waltele', function() {
//     return view('waltele');
// });


Route::resource('posts',PostController::class);
Route::resource('posts2',Posts2Controller::class);
Route::resource('category',CategoryController::class);
Route::resource('sidebar',SidebarController::class);

Route::get('index',[SubcatagoriesController::class,'getCategories']);
Route::get('index/getSubcatagories/{id}',[SubcatagoriesController::class,'getSubcatagories']);
//  Route::get('/dashboard',[SidebarController::class,'getCategories']);
//  Route::get('/dashboard/getSubcatagories/{id}',[SidebarController::class,'getSubcatagories']);

Route::get('/index',[Main::class,'Index']);
Route::get('/electronic',[ElectronicController::class,'Index']);
Route::get('/fashion',[FashionController::class,'Index']);
Route::get('/jewellery',[JewelleryController::class,'Index']);
//Route::get('/get_category',[CategoryController::class,'get_category']);


Route::get('/test',[CategoryController::class,'test']);

require __DIR__.'/auth.php';
