<?php

use App\Http\Controllers\ProfileController;
use App\Models\Video;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () { return Inertia::render('Welcome', [ 'videos' => Video::inRandomOrder()->get() ]); })->name('home');

Route::get('delete-video', function () {
    return Inertia::render('DeleteVideo');
})->name('deleteVideo');
Route::get('add-video', function () {
    return Inertia::render('AddVideo');
})->name('addVideo');
Route::get('/videos/{id}',[\App\Http\Controllers\VideosController::class,'show'])->name('videos.show');


require __DIR__.'/auth.php';
