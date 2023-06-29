<?php

use Illuminate\Support\Facades\Route;
//Admin

//User
use App\Http\Controllers\user\HomeController as UserHomeController;
use App\Http\Controllers\user\CategoryController as UserCategoryController;
use App\Http\Controllers\user\TypeCategoryController as UserTypeCategoryController;
use App\Http\Controllers\user\SearchController as UserSearchController;
use App\Http\Controllers\user\DetailController as UserDetailController;
use App\Http\Controllers\user\ContactController as UserContactController;
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
})->name('login.admin');

Route::get('admin', function () {
    return redirect('admin/dashboard');
})->name('admin');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard.admin');

Route::get('admin/list', function () {
    return view('admin.ManagerList');
<<<<<<< HEAD
})->name('category.admin');
=======
})->name('list');
>>>>>>> 624f93865c5f08b939b22880d9182f4530165ae1

Route::get('admin/slide', function () {
    return view('admin.ManagercSlideShow');
})->name('slide.admin');

Route::get('admin/contact', function () {
    return view('admin.ManagercContact');
})->name('contact.admin');

Route::get('admin/ads', function () {
    return view('admin.ManagerAdvertisement');
})->name('ads.admin');

Route::get('admin/setting', function () {
    return view('admin.ManagerSettingInfo');
})->name('setting.admin');

Route::get('admin/post', function () {
    return view('admin.ManagerComment');
})->name('post.admin');

//User
Route::get('/', [UserHomeController::class,'index'])->name('/');
Route::get('/category', [UserCategoryController::class,'index'])->name('category');
Route::get('/type-category', [UserTypeCategoryController::class,'index'])->name('type-category');
Route::get('/search', [UserSearchController::class,'index'])->name('search');



Route::get('admin/logout', function () {
    return redirect()->route('login.admin');
})->name('logout.admin');

Route::post('auth/admin', function () {
    return redirect()->route('admin');
})->name('auth.admin');

Route::get('/detail', [UserDetailController::class,'index'])->name('detail');
Route::get('/contact', [UserContactController::class,'index'])->name('contact');

