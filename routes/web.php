<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\SectionController;
use App\Http\Middleware\RedirectIfUserNotAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/robots.txt', [RobotsController::class, 'index']);

Route::group(['prefix' => '/'], function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/{slug}', [PostController::class, 'show'])->name('posts.show');
});

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => RedirectIfUserNotAdmin::class], function () {
        Route::group(['prefix' => '/blog'], function () {
            Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
            Route::post('/', [BlogController::class, 'store'])->name('blog.store');
        });

        Route::group(['prefix' => '/posts'], function () {
            Route::get('/create', [PostController::class, 'create'])->name('posts.create');
            Route::post('/', [PostController::class, 'store'])->name('posts.store');
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
    }
    );
});

Route::fallback(function () {
    return view('not_found');
});

require __DIR__ . '/auth.php';
