<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\services\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//rank-api
Route::group(['prefix'=>'/contacts'],function() {
    Route::get('/get-contact',[ContactController::class,'getContact']);
    Route::get('/get-contact-by-id/{id}',[ContactController::class,'getContactById']);
    Route::post('/save-contact',[ContactController::class,'store']);
    // Route::get('/update-contact/{id}',[ContactController::class,'update']);
    Route::post('/update-contact',[ContactController::class,'update']);
    Route::post('/remove-contact/{id}',[ContactController::class,'remove']);
    Route::post('/destroy-contact/{id}',[ContactController::class,'destroy']);
});