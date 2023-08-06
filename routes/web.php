<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowThreads;
use App\Http\Livewire\ShowThread;

Route::get('/dashboard', ShowThreads::class)->middleware(['auth'])->name('dashboard');
Route::get('/thread/{thread}', ShowThread::class)->middleware(['auth'])->name('thread');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';