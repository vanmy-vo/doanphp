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

use App\Http\Controllers\admin\BaivietController;
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

Route::get('admin/category', function () {
    return view('admin.ManagerList');
})->name('category.admin');

Route::get('admin/slide', function () {
    return view('admin.ManagercSlideShow');
})->name('slide.admin');

Route::get('admin/contact', function () {
    return view('admin.ManagercContact');
})->name('admin-contact');

Route::get('admin/ads', function () {
    return view('admin.ManagerAdvertisement');
})->name('ads.admin');

Route::get('admin/setting', function () {
    return view('admin.ManagerSettingInfo');
})->name('setting.admin');

// Route::get('admin/post', function () {
//     return view('admin.ManagerComment');
// })->name('post.admin');

Route::get('admin/baiviet', [BaivietController::class, 'index'])->name('post.admin');
Route::post('admin/luubaiviet', [BaivietController::class, 'store'])->name('post.admin.store');
Route::post('admin/capnhatbaiviet', [BaivietController::class, 'edit'])->name('post.admin.update');
Route::post('admin/capnhat', [BaivietController::class, 'update'])->name('post.admin.edit');

Route::get('admin/user', function () {
    return view('admin.ManagerUser');
})->name('user.admin');

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

//CKeditor and CKFinder
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')->name('ckfinder_connector');
Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')->name('ckfinder_browser');

