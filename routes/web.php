<?php

use Illuminate\Support\Facades\Route;
//Admin

//User
use App\Http\Controllers\user\HomeController as UserHomeController;
use App\Http\Controllers\user\CategoryController as UserCategoryController;
use App\Http\Controllers\user\TypeCategoryController as UserTypeCategoryController;
use App\Http\Controllers\user\SearchController as UserSearchController;
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
//Admin

Route::get('/', function () {
    // return view('welcome');
    return redirect('home');
})->middleware('web');


Route::get('home', function () {
    return view('user.index');

});

Route::middleware(['web'])->group(function() {



});


Route::get('admin/login', function () {
    return view('admin.login');
});

Route::get('admin', function () {
    return redirect('admin/dashboard');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('admin/category', function () {
    return view('admin.ManagerList');
})->name('category');

Route::get('admin/slide', function () {
    return view('admin.ManagercSlideShow');
})->name('slide');

Route::get('admin/contact', function () {
    return view('admin.ManagercContact');
})->name('contact');

Route::get('admin/ads', function () {
    return view('admin.ManagerAdvertisement');
})->name('ads');

Route::get('admin/setting', function () {
    return view('admin.ManagerSettingInfo');
})->name('setting');

Route::get('admin/post', function () {
    return view('admin.ManagerComment');
})->name('post');

//User
Route::get('/', [UserHomeController::class,'index'])->name('/');
Route::get('/category', [UserCategoryController::class,'index'])->name('category');
Route::get('/type-category', [UserTypeCategoryController::class,'index'])->name('type-category');
Route::get('/search', [UserSearchController::class,'index'])->name('search');
