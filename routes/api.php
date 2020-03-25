<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/user/{user}/posts', [UserController::class, 'posts']);
Route::get('/posts/{post}/comments', [CommentController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::put('/posts', [PostController::class, 'store']);
Route::patch('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/posts/{post}/like', [LikeController::class, 'toggleLike']);
