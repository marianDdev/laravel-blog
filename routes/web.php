<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/blog'], function () {
    Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/', [BlogController::class, 'store'])->name('blog.store');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/', [PostController::class, 'store'])->name('posts.store');
    Route::get('/{slug}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/post/create-conclusion/{id}', [PostController::class, 'creteConclusion'])->name('posts.create_conclusion');
    Route::patch('/post/store-conclusion', [PostController::class, 'storeConclusion'])->name('posts.store_conclusion');
    Route::patch('/', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/{id}', [PostController::class, 'delete'])->name('posts.delete');
});

Route::group(['prefix' => '/sections'], function () {
    Route::get('/create/{postId}', [SectionController::class, 'create'])->name('sections.create');
    Route::post('/', [SectionController::class, 'storeBatch'])->name('sections.store');
    Route::get('/{slug}', [SectionController::class, 'show'])->name('sections.show');
    Route::get('/{id}/edit', [SectionController::class, 'edit'])->name('sections.edit');
    Route::patch('/', [SectionController::class, 'update'])->name('sections.update');
    Route::delete('/{id}', [SectionController::class, 'delete'])->name('sections.delete');
});
