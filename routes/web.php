<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Models\NewsLetter;
use Illuminate\Support\Facades\Route;

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
Route::view('/side','posts.side');
Route::view('/single','posts.single');


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/iletisim',[HomeController::class,'contact'])->name('contact');
Route::get('/hakkimizda',[HomeController::class,'aboutStore'])->name('about');
Route::post('/news',[HomeController::class,'store'])->name('news.store');

Route::view('/dashboard/login','dashboard.login')->name('login');
Route::post('/dashboard/login',[DashboardController::class,'login'])->name('dashboard.login');




Route::middleware('auth')->group(function(){
Route::resource('dashboard/colors', ColorController::class);
Route::get("dashboard/system",[DashboardController::class,'system'])->name("dashboard.system");
Route::put("dashboard/system",[DashboardController::class,'updateSystem'])->name("dashboard.updateSystem");

Route::get('/dashboard/products',[ProductController::class,'index'])->name('products.index');
Route::get('/dashboard/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/dashboard/products',[ProductController::class,'store'])->name('products.store');
Route::get('dashboard/colors/delete/{color}',[ColorController::class,'delete'])->name('colors.delete');
Route::get('dashboard/products/display/{product}',[ProductController::class,'display'])->name('products.display');
Route::get('dashboard/products/delete/{product}',[ProductController::class,'delete'])->name('products.delete');
Route::get('dashboard/products/delete/image/{id}',[ProductController::class,'delPic'])->name('products.delPic');

Route::get('dashboard/products/change/{product}',[ProductController::class,'changePic'])->name('products.change');
Route::put('dashboard/products/change/{product}',[ProductController::class,'updatePic'])->name('products.updateImg');
Route::get('dashboard/products/add/{product}',[ProductController::class,'addImage'])->name('products.addImage');
Route::post('dashboard/products/add/{product}',[ProductController::class,'storeImage'])->name('products.storeImage');
Route::get('dashboard/products/edit/{product}',[ProductController::class,'edit'])->name('products.edit');
Route::put('dashboard/products/edit/{product}',[ProductController::class,'update'])->name('products.update');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/dashboard/logout',[DashboardController::class,'logout'])->name('dashboard.logout');

Route::get('/dashboard/news',[DashboardController::class,'displayNews'])->name('dashboard.news');

Route::get('/dashboard/profile/edit',[DashboardController::class,'edit'])->name('dashboard.edit');
Route::put('/dashboard/profile/edit',[DashboardController::class,'update'])->name('dashboard.update');
Route::get('/dashboard/profile/password',[AuthController::class,'edit'])->name('dashboard.password');
Route::put('/dashboard/profile/password',[AuthController::class,'update'])->name('dashboard.security');
Route::get('/dashboard/profile/about',[DashboardController::class,'about'])->name('dashboard.about');
Route::put('/dashboard/profile/about',[DashboardController::class,'updateAbout'])->name('dashboard.updateAbout');

Route::get('/dashboard/slider/edit',[DashboardController::class,'slider'])->name('dashboard.slider');
Route::put('/dashboard/slider/edit',[DashboardController::class,'sliderUpdate'])->name('dashboard.sliderUpdate');

Route::resource('dashboard/sliders', SliderController::class);
Route::get('/dashboard/sliders/delete/{slider}',[SliderController::class,'delete'])->name('sliders.delete');

Route::resource('dashboard/categories', CategoryController::class);
Route::get('/dashboard/categories/delete/{category}',[CategoryController::class,'delete'])->name('categories.delete');
Route::get('/dashboard/banner',[DashboardController::class,'banner'])->name('banner');
Route::put('/dashboard/banner',[DashboardController::class,'updateBanner'])->name('dashboard.banner');
Route::get('/dashboard/review',[DashboardController::class,'review'])->name('dashboard.review');
});
