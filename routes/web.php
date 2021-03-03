<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

// Generate Laravel Auth Routes
Auth::routes();
  
// Fontend Controller Routes
Route::get('/', [FontendController::class, 'index']);
Route::get('about', [FontendController::class, 'about']);
Route::get('dashbroad',[FontendController::class, 'dashbroad']);

// Home Controller Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');

// categroy Controller Routes
Route::get('category', [CategoryController::class, 'category']);
Route::post('category/post', [CategoryController::class, 'categorypost']);
Route::get('category/delete/{category_id}', [CategoryController::class, 'categorydelete']);
Route::get('category/all/delete', [CategoryController::class, 'categoryalldelete']);
Route::get('category/edit/{category_id}', [CategoryController::class, 'categoryedit']);
Route::post('category/post/edit', [CategoryController::class, 'category_post_edit']);
Route::get('category/restore/{category_id}', [CategoryController::class, 'category_restore']);
Route::get('category/forcedelete/{category_id}', [CategoryController::class, 'categoryforce']);
Route::get('category/all/forcedelete', [CategoryController::class, 'category_force_delete_all']);
Route::get('category/all/restore', [CategoryController::class, 'category_restore_all']);
Route::post('category/check/delete', [CategoryController::class, 'category_check_delete'])->name('category_check_delete');