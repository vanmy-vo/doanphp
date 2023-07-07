<?php
// Frameword
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdminLogin;
//Admin
use App\Http\Controllers\admin\BaivietController;
use App\Http\Controllers\admin\CaidatController;
use App\Http\Controllers\admin\AdsController;
use App\Http\Controllers\admin\ContactController;

//User
use App\Http\Controllers\user\HomeController as UserHomeController;
use App\Http\Controllers\user\CategoryController as UserCategoryController;
use App\Http\Controllers\user\TypeCategoryController as UserTypeCategoryController;
use App\Http\Controllers\user\SearchController as UserSearchController;
use App\Http\Controllers\user\DetailController as UserDetailController;
use App\Http\Controllers\user\ContactController as UserContactController;

use App\Http\Controllers\admin\SettingController;

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
})->name('homepage');

Route::middleware(['web'])->group(function() {
});


// trang dang nhap cua quan tri vien
Route::get('admin/login', function () {
    return view('admin.login');
})->name('login.admin');


// chuyen huong sang trang thong ke
Route::get('admin', function () {
    return redirect('admin/dashboard');
})->name('admin')->middleware(CheckAdminLogin::class);


// quan ly thong ke
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard.admin')->middleware(CheckAdminLogin::class);


// quan ly danh muc
Route::get('admin/category', function () {
    return view('admin.ManagerList');
})->name('category.admin')->middleware(CheckAdminLogin::class);
Route::get('/search',[CategoryController::class,'search'])->name('search')->middleware(CheckAdminLogin::class);
Route::post('/addcategory',[CategoryController::class, 'addCategory'])->name('addCategory')->middleware(CheckAdminLogin::class);
Route::get('admin/loadcategory',[CategoryController::class, 'loadCategory'])->name('loadCategory')->middleware(CheckAdminLogin::class);


// quan ly slide show
Route::get('admin/slide', function () {
    return view('admin.ManagercSlideShow');
})->name('slide.admin')->middleware(CheckAdminLogin::class);

//quan ly lien he
<<<<<<< HEAD
Route::get('admin/contact', function () {
    return view('admin.ManagercContact');
})->name('admin-contact')->middleware(CheckAdminLogin::class);
Route::post('/addcontact',[ContactController::class, 'addContact'])->name('addContact')->middleware(CheckAdminLogin::class);
=======
// Route::get('admin/contact', function () {
//     return view('admin.ManagercContact');
// })->name('admin-contact');
// Route::post('/addcontact',[ContactController::class, 'addContact'])->name('addContact');

// quan ly lien he
    Route::get('admin/contact',[ContactController::class,'index'])->name('contact.admin')->middleware(CheckAdminLogin::class);
    Route::post('admin/update',[ContactController::class,'updateContact'])->name('update.contact')->middleware(CheckAdminLogin::class);
>>>>>>> 994f351484e284be0328e7750370f886332ae66a

//quan ly quang cao
Route::get('admin/ads', function () {
    return view('admin.ManagerAdvertisement');
})->name('ads.admin')->middleware(CheckAdminLogin::class);
Route::post('/addads',[AdsController::class, 'addAds'])->name('addAds')->middleware(CheckAdminLogin::class);
Route::get('/searchads',[AdsController::class,'searchads'])->name('searchads')->middleware(CheckAdminLogin::class);
Route::get('admin/loadads',[AdsController::class,'loadAds'])->name('loadAds')->middleware(CheckAdminLogin::class);

// Route::get('admin/post', function () {
//     return view('admin.ManagerComment');
// })->name('post.admin');

// quan ly bai viet
Route::get('admin/baiviet', [BaivietController::class, 'index'])->name('post.admin')->middleware(CheckAdminLogin::class);
Route::post('admin/luubaiviet', [BaivietController::class, 'store'])->name('post.admin.store')->middleware(CheckAdminLogin::class);
Route::post('admin/capnhatbaiviet', [BaivietController::class, 'edit'])->name('post.admin.update')->middleware(CheckAdminLogin::class);
Route::post('admin/capnhat', [BaivietController::class, 'update'])->name('post.admin.edit')->middleware(CheckAdminLogin::class);
Route::post('admin/delete', [BaivietController::class, 'destroy'])->name('post.admin.delete')->middleware(CheckAdminLogin::class);
<<<<<<< HEAD
Route::get('admin/lienhe', [LienheController::class, 'index'])->name('post.admim.lienhe')->middleware(CheckAdminLogin::class);
Route::post('admin/luulienhe', [LienheController::class, 'addContact'])->name('post.admin.savecontact')->middleware(CheckAdminLogin::class);
Route::get('admin/caidat', [CaidatController::class, 'index'])->name('post.admim.caidat')->middleware(CheckAdminLogin::class);
Route::POST('admin/capnhatcaidat', [CaidatController::class, 'update'])->name('post.admim.updatesetting')->middleware(CheckAdminLogin::class);
=======
Route::get('admin/lienhe', [LienheController::class, 'index'])->name('post.admim.lienhe');
Route::post('admin/luulienhe', [LienheController::class, 'addContact'])->name('post.admin.savecontact');

Route::get('admin/setting', [SettingController::class, 'index'])->name('post.admim.setting');
Route::POST('admin/updatesetting', [SettingController::class, 'update'])->name('post.admim.updatesetting');

>>>>>>> 994f351484e284be0328e7750370f886332ae66a
Route::get('admin/user', function () {
    return view('admin.ManagerUser');
})->name('user.admin')->middleware(CheckAdminLogin::class);
//User
Route::get('/home', [UserHomeController::class,'index'])->name('home');
Route::get('/category', [UserCategoryController::class,'index'])->name('category');
Route::get('/type-category', [UserTypeCategoryController::class,'index'])->name('type-category');
Route::get('/search', [UserSearchController::class,'index'])->name('search');
Route::post('/addcontact',[ContactController::class, 'addContact'])->name('addContact');

Route::get('admin/logout', function () {
    session()->forget('user');
    return redirect()->route('login.admin');
})->name('logout.admin');
Route::post('auth/admin', function (Request $request) {
    return redirect()->route('admin');
})->name('auth.admin')->middleware(CheckAdminLogin::class);
Route::get('/detail', [UserDetailController::class,'index'])->name('detail');
Route::get('/contact', [UserContactController::class,'index'])->name('contact');
//CKeditor and CKFinder
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')->name('ckfinder_connector');
Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')->name('ckfinder_browser');
Route::get('bai-viet/{slug}', [UserDetailController::class, 'detail'])->name('chitietbaiviet');
Route::get('danh-muc/{id}', [UserCategoryController::class, 'detailcategory'])->name('chitietdanhmuc');
Route::get('loai-danh-muc/{id}', [UserTypeCategoryController::class, 'detailtype'])->name('chitietloai');


Route::post('binhluanbaiviet', [UserDetailController::class, 'binhluan'])->name('binhluanpost');

Route::post('timkiembaivietadmin', [BaivietController::class, 'timkiem'])->name('tim')->middleware(CheckAdminLogin::class);

Route::post('locloaitudanhmuc', [BaivietController::class, 'filter'])->name('filterloai')->middleware(CheckAdminLogin::class);

Route::post('binhluanbaiviet', [UserDetailController::class, 'binhluan'])->name('binhluanpost');

Route::get('timkiemadmin', [BaivietController::class, 'search'])->name('search.get')->middleware(CheckAdminLogin::class);