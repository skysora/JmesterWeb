<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetDataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedCommentController;
use App\Http\Controllers\FeedCommentLikeController;
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

// Index Control
//sora do

Route::get('/', [GetDataController::class, 'index']);
Route::post('/getUserInfo',[UserController::class, 'getUserInfo'])->name("getUserInfo");
Route::post('/getComment',[FeedCommentController::class, 'getComment'])->name("getComment");
Route::post('/getCommentNumber',[FeedCommentController::class, 'getCommentNumber'])->name("getCommentNumber");
Route::post('/getLikeNumber',[FeedCommentLikeController::class, 'getLikeNumber'])->name("getLikeNumber");
