<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// User 
// public route 
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);

// private route 
Route::post('users', [UserController::class, 'store']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

// posts 
// public route 
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);

// private route 
Route::post('posts', [PostController::class, 'store']);
Route::put('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/{id}', [PostController::class, 'destroy']);

// comment 
// public route 
Route::get('comments', [CommentController::class, 'index']);
Route::get('comments/{id}', [CommentController::class, 'show']);

// private route 
Route::post('comments', [CommentController::class, 'store']);
Route::put('comments/{id}', [CommentController::class, 'update']);
Route::delete('comments/{id}', [CommentController::class, 'destroy']);

// Role 
// public route 
Route::get('role', [RoleController::class, 'index']);
Route::get('role/{id}', [RoleController::class, 'show']);

// private route 
Route::post('role', [RoleController::class, 'store']);
Route::put('role/{id}', [RoleController::class, 'update']);
Route::delete('role/{id}', [RoleController::class, 'destroy']);

// Profile 
// public route 
Route::get('profiles', [ProfileController::class, 'index']);
Route::get('profiles/{id}', [ProfileController::class, 'show']);

// private route 
Route::post('profiles', [ProfileController::class, 'store']);
Route::put('profiles/{id}', [ProfileController::class, 'update']);
Route::delete('profiles/{id}', [ProfileController::class, 'destroy']);