<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');
Route::get('delete-video', function () {
    return Inertia::render('DeleteVideo');
})->name('deleteVideo');
Route::get('/videos/{id}',[\App\Http\Controllers\VideosController::class,'show'])->name('videos.show');


require __DIR__.'/auth.php';
