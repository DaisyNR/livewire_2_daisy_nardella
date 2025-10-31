<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class, 'welcome'])->name('home');

Route::get('/article/create',[ArticleController::class, 'create'])->name('article.create');
// Route::post('/article/create/submit',[ArticleController::class,'store'])->name('article.submit');
Route::get('/article/index',[ArticleController::class,'index'])->name('article.index');
Route::get('/article/show/{article}',[ArticleController::class,'show'])->name('article.show');
Route::get('/article/edit/{article}',[ArticleController::class,'edit'])->name('article.edit');
// Route::put('/article/update/{article}',[ArticleController::class,'update'])->name('article.update');
// Route::delete('/article/delete/{article}',[ArticleController::class,'destroy'])->name('article.delete');