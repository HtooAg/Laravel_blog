<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;

Route::get('/articles', [ ArticleController::class, 'index' ]);
Route::get('/articles/detail/{id}', [ ArticleController::class, 'detail' ]);
Route::get('/articles/add', [ ArticleController::class, 'add' ]);
Route::get('/articles/post', [ ArticleController::class, 'create' ]);
Route::get('/articles/delete/{id}', [ ArticleController::class, 'delete' ]);
Route::get('/products', [ ArticleController::class, 'index' ]);

Route::get('/', function () {
    return view('welcome'); 
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
